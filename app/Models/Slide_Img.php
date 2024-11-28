<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide_Img extends Model
{
    use HasFactory;

    protected $table = "slide_img";

    protected $fillable = [
        'title',
        'image',
        'active'
    ];
}