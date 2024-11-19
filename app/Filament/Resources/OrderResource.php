<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Resources\OrderResource\RelationManagers\AddressRelationManager;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Number;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Group::make()->schema([
                Section::make('Order Information')->schema([

                    Select::make('user_id')
                        ->label('Customer')
                        ->relationship('user', 'name')
                        ->searchable()
                        ->preload()
                        ->placeholder('Select a customer')
                        ->required(),

                    Select::make('payment_method')
                        ->options([
                            'ewallet'          => 'E-Wallet',
                            'bank'             => 'Bank Transfer',
                            'creditcard'       => 'Credit Card',
                            'cod'              => 'Cash on Delivery',
                            'paypal'           => 'PayPal',
                            'cryptocurrency'   => 'Cryptocurrency',
                            'debitcard'        => 'Debit Card',
                            'qrcode'           => 'QR Code Payment',
                            'shopnowpaylater'  => 'Shop Now, Pay Later',
                        ])
                        ->placeholder('Select a payment method')
                        ->required(),

                    Select::make('payment_status')
                        ->label('Payment Status')
                        ->options([
                            'pending'    => 'Pending',
                            'processing' => 'Processing',
                            'completed'  => 'Completed',
                            'failed'     => 'Failed',
                            'refunded'   => 'Refunded',
                            'cancelled'  => 'Cancelled',
                        ])
                        ->default('pending') 
                        ->required(),

                    ToggleButtons::make('status')
                        ->label('Order Status')
                        ->options([
                            'new'         => 'New',
                            'processing'  => 'Processing',
                            'shipped'     => 'Shipped',
                            'delivered'   => 'Delivered',
                            'cancelled'   => 'Cancelled',
                        ])
                        ->colors( [
                            'new'         => 'info',
                            'processing'  => 'warning',
                            'shipped'     => 'success',
                            'delivered'   => 'success',
                            'cancelled'   => 'danger',
                        ])
                        ->icons([
                            'new'         => 'heroicon-m-sparkles',
                            'processing'  => 'heroicon-m-arrow-path',
                            'shipped'     => 'heroicon-m-truck',
                            'delivered'   => 'heroicon-m-check-badge',
                            'cancelled'   => 'heroicon-m-x-circle',
                        ])
                        ->default('new')
                        ->inline()
                        ->required(),

                    Select::make('currency')
                    ->options([
                        'idr' => 'IDR',
                        'usd' => 'USD',
                        'eur' => 'EUR',
                        'yen' => 'YEN',
                    ])
                    ->default('idr')
                    ->required(),

                    Select::make('shipping_method')
                    ->options([
                        'standard'   => 'Standard Shipping', 
                        'express'    => 'Express Shipping', 
                        'overnight'  => 'Overnight Shipping', 
                        'pickup'     => 'Store Pickup', 
                        'drone'      => 'Drone Delivery', 
                        'freight'    => 'Freight Shipping', 
                        'same_day'   => 'Same Day Delivery',
                    ])
                    ->required(),

                    Textarea::make('notes')
                    ->columnSpanFull()
                ])->columns(2),

                Section::make('Order Items')->schema([
                    Repeater::make('items')
                    ->relationship()
                    ->schema([

                        Select::make('product_id')
                        ->relationship('product', 'name')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->distinct()
                        ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                        ->columnSpan(4)
                        ->reactive()
                        ->afterStateUpdated(fn ($state, Set $set) => $set('unit_amount', Product::find($state)?->price ?? 0 ))
                        ->afterStateUpdated(fn ($state, Set $set) => $set('total_amount', Product::find($state)?->price ?? 0 )),

                        TextInput::make('quantity')
                        ->numeric()
                        ->required()
                        ->default(1)
                        ->minValue(1)
                        ->columnSpan(2)
                        ->reactive()
                        ->afterStateUpdated(fn ($state, Set $set, Get $get) => $set('total_amount', $state*$get('unit_amount'))),

                        TextInput::make('unit_amount')
                        ->numeric()
                        ->required()
                        ->disabled()
                        ->dehydrated()
                        ->columnSpan(3),

                        TextInput::make('total_amount')
                        ->numeric()
                        ->required()
                        ->dehydrated()
                        ->columnSpan(3),

                    ])->columns(12),

                    Placeholder::make('grand_total_placeholder')
                    ->label('Grand Total')
                    ->content(function (Get $get, Set $set) {
                        $total = 0;
                        if (!$repeaters = $get('items')) {
                            return $total;
                        }
                        
                        foreach ($repeaters as $key => $repeaters) {
                            $total += $get("items.{$key}.total_amount");
                        }
                        $set('grand_total', $total);
                        return Number::currency($total, 'IDR');
                    }),

                    Hidden::make('grand_total')
                    ->default(0)
                ])
            ])->columnSpanFull()
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                ->label('Customer')
                ->sortable()
                ->searchable(),
            
                TextColumn::make('grand_total')
                ->numeric()
                ->sortable()
                ->money('IDR'),

                TextColumn::make('payment_method')
                ->searchable()
                ->sortable(),

                TextColumn::make('payment_status')
                ->searchable()
                ->badge()
                ->sortable(),

                TextColumn::make('currency')
                ->searchable()
                ->sortable(),

                TextColumn::make('shipping_method')
                ->searchable()
                ->sortable(),

                SelectColumn::make('status')
                ->options([
                    'new'         => 'New',
                            'processing'  => 'Processing',
                            'shipped'     => 'Shipped',
                            'delivered'   => 'Delivered',
                            'cancelled'   => 'Cancelled',
                ])
                ->searchable()
                ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            AddressRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}