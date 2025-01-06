<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('merchant.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'image' => 'image|required',
            'points' => 'numeric',

        ]);

        $request->merge([
            'slug' => Str::slug($request->post('name'))
        ]);

        $data = $request->except('image');
        $data['image'] = $this->uploadImage($request);

        Product::create($data);
        // dd($request->all());
        return Redirect::route('products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('merchant.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'image' => 'image|required',
            'points' => 'numeric',

        ]);

        $request->merge([
            'slug' => Str::slug($request->post('name'))
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request);
        } else {
            $data['image'] = $product->image;
        }

        $product->update($data);

        return Redirect::route('products.index')->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return Redirect::route('products.index')->with('success', 'Product deleted successfully!');
    }

    /**
     * Helper function to upload an image.
     */
    public function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return null;
        }

        $file = $request->file('image');
        $path = $file->store('uploads', [
            'disk' => 'public'
        ]);

        return $path;
    }
}
