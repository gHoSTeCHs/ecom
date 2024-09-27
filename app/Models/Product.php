<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(related: ProductImage::class);
    }

    public function category()
    {
        return $this->belongsTo(related: ProductCategory::class, foreignKey: 'product_category_id');
    }
}
