<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'id_product';
    protected $guarded = ['id_product'];
    public $timestamps = false;
    protected $table = 'products';
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id_product');
    }
    
    use HasFactory;
}
