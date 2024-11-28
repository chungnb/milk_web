<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slide_img;

class SlideController extends Controller
{
    public function show(){
        $sli = Slide_img::all();
        return view('layouts.slide_img.slide_img');
    }
}