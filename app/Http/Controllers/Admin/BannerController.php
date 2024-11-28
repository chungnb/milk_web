<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){
        $banners = Banner::orderBy('id', 'desc')->paginate(10);
        return view('admin.banner.index', compact('banners'));
    }

    public function create(){
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('slides', 'public');
        }
        
        Banner::create([
            'title' => $request->title,
            'image' => $path,
        ]);
        return redirect()->route('admin.banner.index')->with('success', 'Ảnh đã được thêm thành công!');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));
    }

   public function update(Request $request, $id)
   {
       $banner = Banner::findOrFail($id);
       $request->validate([
           'title' => 'required|string|max:255',
           'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
       ]);

       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('banners', 'public');
           $banner->image = $imagePath;
       }
       
       $banner->update([
           'title' => $request->title,
       ]);

       return redirect()->route('admin.banner.index')->with('success', 'Banner updated successfully!');
   }

   public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', 'Banner deleted successfully!');
    }
}