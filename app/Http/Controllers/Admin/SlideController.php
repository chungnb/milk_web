<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Slide_img;

class SlideController extends Controller
{
    public function index(){
        $slides = Slide_img::orderBy('id', 'desc')->paginate(10);
        return view('admin.slide_img.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slide_img.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);
        // Xử lý hình ảnh
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('slides', 'public');
        }
        
        Slide_img::create([
            'title' => $request->title,
            'image' => $path,
        ]);
        return redirect()->route('admin.slide_img.index')->with('success', 'Ảnh đã được thêm thành công!');
    }

    public function edit($id)
    {
        $slide = Slide_img::findOrFail($id);
        return view('admin.slide_img.edit', compact('slide'));
    }

   public function update(Request $request, $id)
   {
       $slide = Slide_img::findOrFail($id);
       $request->validate([
           'title' => 'required|string|max:255',
           'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
       ]);

       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('slides', 'public');
           $slide->image = $imagePath;
       }
       
       $slide->update([
           'title' => $request->title,
       ]);

       return redirect()->route('admin.slide_img.index')->with('success', 'Slide updated successfully!');
   }

    public function destroy($id)
    {
        $slide = Slide_img::findOrFail($id);
        $slide->delete();
        return redirect()->route('admin.slide_img.index')->with('success', 'Slide deleted successfully!');
    }
}