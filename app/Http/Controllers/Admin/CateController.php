<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorys;

class CateController extends Controller
{
    public function index(){
        $cates = Categorys::all();
        return view('admin.cate.index', compact('cates'));
    }

    public function create()
    {
        return view('admin.cate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);
        // Xử lý hình ảnh
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('categories', 'public');
        }
        
        Categorys::create([
            'name' => $request->name,
            'image' => $path,
        ]);
        return redirect()->route('admin.cate.index')->with('success', 'Ảnh đã được thêm thành công!');
    }

    public function edit($id)
    {
        $cate = Categorys::findOrFail($id);
        return view('admin.cate.edit', compact('cate'));
    }

   public function update(Request $request, $id)
   {
       $cate = Categorys::findOrFail($id);
       $request->validate([
           'name' => 'required|string|max:255',
           'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
       ]);

       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('categories', 'public');
           $cate->image = $imagePath;
       }
       
       $cate->update([
           'name' => $request->name,
       ]);

       return redirect()->route('admin.cate.index')->with('success', 'Cate updated successfully!');
   }

   public function destroy($id)
    {
        $cate = Categorys::findOrFail($id);
        $cate->delete();
        return redirect()->route('admin.cate.index')->with('success', 'Cate deleted successfully!');
    }
}