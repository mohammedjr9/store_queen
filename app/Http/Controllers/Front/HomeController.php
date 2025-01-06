<?php

namespace App\Http\Controllers\Front;

use App\Models\Video;
use App\Models\product;
use App\Models\work_teams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\our_products;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::take(6)->get();
        $video = Video::latest()->first();
        $about = About::latest()->first();
        $work_team = work_teams::all();
        $our_products  = our_products::all();

        // dd($products);
        return view('Front.index', compact('products', 'video', 'about', 'work_team', 'our_products'));
    }
}
