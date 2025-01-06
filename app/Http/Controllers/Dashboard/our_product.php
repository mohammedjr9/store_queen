<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\our_products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class our_product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_products = our_products::all();
        return view('merchant.ourproduct.index', compact('our_products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.ourproduct.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'content' => 'required|string',
            'discription' => 'nullable|string',
        ]);

        our_products::create([

            'content' => $request->content,
            'discription' => $request->discription,
        ]);

        return redirect()->route('OurProduct.index')->with('success', 'Product added successfully.');;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $our_products = our_products::findOrFail($id);
        return view('merchant.ourproduct.edit', compact('our_products'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'content' => ['nullable', 'string'],
            'discription' => ['nullable', 'string'],
        ]);

        $product = our_products::findOrFail($id);
        $product->update($request->all());

        return Redirect::route('OurProduct.index')->with('success', 'Product updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = our_products::findOrFail($id);
        $product->delete();

        return Redirect::route('OurProduct.index')->with('success', 'Product deleted successfully!');
    }
}
