<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product Information')->schema([
                        TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur:true)
                        ->afterStateUpdated(function (string $operation, $state, Set $set) {
                            if ($operation !== 'create') {
                                return;
                            }
                            $set('slug', Str::slug($state));
                        }),

                        TextInput::make('slug')
                        ->required()
                        ->maxLength(255)
                        ->disabled()
                        ->dehydrated()
                        ->unique(Product::class, 'slug', ignoreRecord: true),

                        RichEditor::make('description')
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('products')
                    ])->columns(2),

                    Section::make('Images')->schema([
                        FileUpload::make('images')
                        ->multiple()
                        ->directory('produts')
                        ->maxFiles(5)
                        ->reorderable(),
                    ])

                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Price')->schema([
                        TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('USD')
                    ]),

                    Section::make('Associations')->schema([
                        Select::make('category_id')
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship('category' , 'name'),

                        Select::make('brand_id')
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship('brand' , 'name'),

                        Section::make('Status')->schema([
                            Toggle::make('in_stock')
                            ->required()
                            ->default(true), 

                            Toggle::make('is_active')
                            ->required()
                            ->default(true), 

                            Toggle::make('is_featured')
                            ->required(), 

                            Toggle::make('on_sale')
                            ->required(), 
                        ])
                    ])
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->label('Product Name')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('category.name')
                ->label('Category')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('brand.name')
                ->label('Brand')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('price')
                ->label('Price')
                ->money('USD')
                ->sortable(),
            
            Tables\Columns\IconColumn::make('is_featured')
                ->label('Featured')
                ->boolean(),

            Tables\Columns\IconColumn::make('on_sale')
                ->label('On Sale')
                ->boolean(),

            Tables\Columns\IconColumn::make('in_stock')
                ->label('In Stock')
                ->boolean(),

            Tables\Columns\IconColumn::make('is_active')
                ->label('Active')
                ->boolean(),

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
                SelectFilter::make('category')
                ->relationship('category', 'name'),

                SelectFilter::make('brand')
                ->relationship('brand', 'name'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
