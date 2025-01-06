<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('merchant.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchant.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subtitle' => ['required', 'string'],
            'description' => 'required|string',
            'products' => 'required|numeric',
            'custumers' => 'required|numeric',
            'orders' => 'required|numeric',
            'image1' => 'image|nullable',
            'image2' => 'image|nullable',
            'image3' => 'image|nullable',
            'image4' => 'image|nullable',
        ]);

        $data = $request->except(['image1', 'image2', 'image3', 'image4']);
        $data['image1'] = $this->uploadImage($request, 'image1');
        $data['image2'] = $this->uploadImage($request, 'image2');
        $data['image3'] = $this->uploadImage($request, 'image3');
        $data['image4'] = $this->uploadImage($request, 'image4');

        About::create($data);

        return Redirect::route('about.index')->with('success', 'تم إنشاء السجل بنجاح');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('merchant.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $request->validate([
            'subtitle' => ['required', 'string'],
            'description' => 'required|string',
            'products' => 'required|numeric',
            'custumers' => 'required|numeric',
            'orders' => 'required|numeric',
            'image1' => 'image|nullable',
            'image2' => 'image|nullable',
            'image3' => 'image|nullable',
            'image4' => 'image|nullable',
        ]);

        $data = $request->except(['image1', 'image2', 'image3', 'image4']);

        $data['image1'] = $request->hasFile('image1') ? $this->uploadImage($request, 'image1') : $about->image1;
        $data['image2'] = $request->hasFile('image2') ? $this->uploadImage($request, 'image2') : $about->image2;
        $data['image3'] = $request->hasFile('image3') ? $this->uploadImage($request, 'image3') : $about->image3;
        $data['image4'] = $request->hasFile('image4') ? $this->uploadImage($request, 'image4') : $about->image4;

        $about->update($data);

        return Redirect::route('about.index')->with('success', 'تم تعديل السجل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);

        $about->delete();

        return Redirect::route('about.index')->with('success', 'تم حذف السجل بنجاح');
    }

    public function uploadImage(Request $request, $key)
    {
        if (!$request->hasFile($key)) {
            return null;
        }

        $file = $request->file($key);
        $path = $file->store('uploads', [
            'disk' => 'public'
        ]);

        return $path;
    }
}
