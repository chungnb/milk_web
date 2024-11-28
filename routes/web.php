<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ImagesController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slide_img;
use App\Models\Banner;
use App\Models\Images;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\Client\ClientController::class, 'index']);

Route::get('/children', function () {
    return view('layouts.cate.layout_children_web');
});
Route::get('/cms', function () {
    return view('admin.cms');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// User
Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
Route::get('/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
Route::post('/user', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store');
Route::get('/user/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/user/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
Route::delete('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');

//cate
Route::get('/cate', [App\Http\Controllers\Admin\CateController::class, 'index'])->name('admin.cate.index');
Route::get('/cate/create', [App\Http\Controllers\Admin\CateController::class, 'create'])->name('admin.cate.create');
Route::post('/cate', [App\Http\Controllers\Admin\CateController::class, 'store'])->name('admin.cate.store');
Route::get('/cate/{id}/edit', [App\Http\Controllers\Admin\CateController::class, 'edit'])->name('admin.cate.edit');
Route::put('/cate/{id}', [App\Http\Controllers\Admin\CateController::class, 'update'])->name('admin.cate.update');
Route::delete('/cate/{id}', [App\Http\Controllers\Admin\CateController::class, 'destroy'])->name('admin.cate.destroy');

//Product
Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products.index');
Route::get('/product/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
Route::post('/product', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
Route::get('/product/{id}/edit', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('/product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin.products.destroy');
Route::get('/product/detail/', [App\Http\Controllers\Client\ProductController::class, 'show'])->name('layouts.product.slide_product');
Route::get('/cate/product', [App\Http\Controllers\Client\ProductController::class, 'show_product_category'])->name('layouts.product.product_cate');

//Slide img
Route::get('/slide', [App\Http\Controllers\Admin\SlideController::class, 'index'])->name('admin.slide_img.index');
Route::get('/slide/create', [App\Http\Controllers\Admin\SlideController::class, 'create'])->name('admin.slide_img.create');
Route::post('/slide', [App\Http\Controllers\Admin\SlideController::class, 'store'])->name('admin.slide_img.store');
Route::get('/slide/{id}/edit', [App\Http\Controllers\Admin\SlideController::class, 'edit'])->name('admin.slide_img.edit');
Route::put('/slide/{id}', [App\Http\Controllers\Admin\SlideController::class, 'update'])->name('admin.slide_img.update');
Route::delete('/slide/{id}', [App\Http\Controllers\Admin\SlideController::class, 'destroy'])->name('admin.slide_img.destroy');
Route::delete('/slide/img', [App\Http\Controllers\Client\SlideController::class, 'show'])->name('layouts.slide_img.slide_img');

//Banner
Route::get('/banner', [App\Http\Controllers\Admin\BannerController::class, 'index'])->name('admin.banner.index');
Route::get('/banner/create', [App\Http\Controllers\Admin\BannerController::class, 'create'])->name('admin.banner.create');
Route::post('/banner', [App\Http\Controllers\Admin\BannerController::class, 'store'])->name('admin.banner.store');
Route::get('/banner/{id}/edit', [App\Http\Controllers\Admin\BannerController::class, 'edit'])->name('admin.banner.edit');
Route::put('/banner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'update'])->name('admin.banner.update');
Route::delete('/banner/{id}', [App\Http\Controllers\Admin\BannerController::class, 'destroy'])->name('admin.banner.destroy');
Route::delete('/banner/img', [App\Http\Controllers\Client\BannerController::class, 'show'])->name('layouts.banner.banner');

// Ảnh bên dưới slide
Route::get('/img', [App\Http\Controllers\Admin\ImagesController::class, 'index'])->name('admin.img.index');
Route::get('/img/create', [App\Http\Controllers\Admin\ImagesController::class, 'create'])->name('admin.img.create');
Route::post('/img', [App\Http\Controllers\Admin\ImagesController::class, 'store'])->name('admin.img.store');
Route::get('/img/{id}/edit', [App\Http\Controllers\Admin\ImagesController::class, 'edit'])->name('admin.img.edit');
Route::put('/img/{id}', [App\Http\Controllers\Admin\ImagesController::class, 'update'])->name('admin.img.update');
Route::delete('/img/{id}', [App\Http\Controllers\Admin\ImagesController::class, 'destroy'])->name('admin.img.destroy');
Route::delete('/img/img', [App\Http\Controllers\Client\ImagesController::class, 'show'])->name('layouts.img.img');