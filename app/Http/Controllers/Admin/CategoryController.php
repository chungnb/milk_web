<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorys;

class CategoryController extends Controller
{
    public function index(){
        $categories = Categorys::orderBy('id', 'desc')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
    ]);

    Categorys::create([
        'name' => $request->name,
        'slug' => $request->slug,
    ]);

    return redirect()->route('admin.category.index')->with('success', 'Category created successfully!');
}

    public function edit($id)
    {
        $categorie = Categorys::findOrFail($id);
        return view('admin.category.edit', compact('categorie'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
        ]);
        $categorie = Categorys::findOrFail($id);
        $categorie->name = $request->input('name');
        $categorie->slug = $request->input('slug');
        $categorie->save();
        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully!');
    }

    public function destroy($id)
    {
        $categorie = Categorys::findOrFail($id);
        $categorie->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully!');
    }
}