<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;

class ImagesController extends Controller
{
    public function index(){
        $images = Images::orderBy('id', 'desc')->paginate(10);
        return view('admin.img.index');
    }

    public function create(){
        return view('admin.img.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);
        // Xử lý hình ảnh
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        }
        
        Images::create([
            'title' => $request->title,
            'image' => $path,
        ]);
        return redirect()->route('admin.img.index')->with('success', 'Ảnh đã được thêm thành công!');
    }

    public function edit($id)
    {
        $image = Images::findOrFail($id);
        return view('admin.img.edit', compact('image'));
    }

   public function update(Request $request, $id)
   {
       $image = Images::findOrFail($id);
       $request->validate([
           'title' => 'required|string|max:255',
           'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
       ]);

       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('images', 'public');
           $image->image = $imagePath;
       }
       
       $image->update([
           'title' => $request->title,
       ]);

       return redirect()->route('admin.img.index')->with('success', 'Image updated successfully!');
   }

   public function destroy($id)
    {
        $image = Images::findOrFail($id);
        $image->delete();
        return redirect()->route('admin.img.index')->with('success', 'Ảnh deleted successfully!');
    }
}