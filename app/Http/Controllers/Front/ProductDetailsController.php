<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetailsController extends Controller
{
    public function index($product_id)
    {
        $product = Product::find($product_id);

        // dd($products);
        return view('Front.product_detail', compact('product'));
    }
}
