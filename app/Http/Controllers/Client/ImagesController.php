<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;

class ImagesController extends Controller
{
    public function show(){
        $img = Images::all();
        return view('layouts.img.img');
    }
}