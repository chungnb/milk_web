<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    use HasFactory;

    protected $table = "categorys";

    protected $fillable = [
        'name',
        'image',
        'active',
        'parent_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}