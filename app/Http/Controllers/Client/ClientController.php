<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorys;

class ClientController extends Controller
{
    public function index(){
        $name = "ss";
        $categories = Categorys::with(['product' => function ($query) {
            $query->orderBy('id', 'desc');
        }])->orderBy('id', 'desc')->get();
        
        return view('layouts.web', compact('categories', 'name'));
    }
}