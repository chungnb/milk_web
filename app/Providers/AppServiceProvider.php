<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\Categorys;
use App\Models\Product;
use App\Models\Slide_img;
use App\Models\Banner;
use App\Models\Images;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Admin
        $banners = Banner::paginate(10);
        $users = User::paginate(10);
        $categories = Categorys::all();
        $products = Product::paginate(10);
        $slides = Slide_img::paginate(10);
        $images = Images::paginate(10);
        $cates = Categorys::all();
        View::share('categories',$categories);
        View::share('users',$users);
        View::share('products',$products);
        View::share('slides',$slides);
        View::share('banners',$banners);
        View::share('images',$images);
        View::share('cates',$cates);


        //Client
        $category = Categorys::all();
        View::share('category',$category);
        $pro = Product::all();
        View::share('pro',$pro);
        $sli = Slide_img::all();
        View::share('sli',$sli);
        $ban = Banner::all();
        View::share('ban',$ban);
        $img = Images::all();
        View::share('img',$img);
        $cats = Categorys::all();
        View::share('cats',$cats);
    }
}