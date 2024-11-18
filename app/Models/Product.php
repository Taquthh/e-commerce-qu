<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'brand_id', 'name', 'slug', 'images', 'description', 'price', 'is_active', 'is_featured', 'in_stock', 'on_sale'];

    protected $casts = [
        'images' => 'array',
    ];

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = is_array($value) ? json_encode($value) : $value;
    }

    public function getImagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}
