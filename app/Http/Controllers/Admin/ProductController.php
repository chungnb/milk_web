<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorys;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $categories = Categorys::all();
        return view('admin.products.create', compact('categories'));
    }

   // Lưu sản phẩm mới
   public function store(Request $request)
   {
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'content' => 'required|string',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'image' => 'nullable|image',
        'categorys_id' => 'required|exists:categories,id',
    ]);
    $plainTextContent = strip_tags($request->content);
    $product = new Product();
    $product->title = $request->title;
    $product->description = $request->description;
    $product->content = $plainTextContent;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->categorys_id = $request->categorys_id;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }
    $product->save();

    return redirect()->route('admin.products.index')->with('success', 'Sản phẩm đã được thêm thành công!');
   }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Categorys::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'categorys_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'categorys_id' => $request->categorys_id,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
}