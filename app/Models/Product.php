<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "product";

    protected $fillable = [
        'title',
        'description',
        'content',
        'price',
        'quantity',
        'image',
        'category_id'
    ];

    // Một sản phẩm thuộc về một danh mục
    public function category()
    {
        return $this->belongsTo(Categorys::class);
    }
}