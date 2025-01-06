<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Slider::select('*');
            if($request->search){
                $data->where('title','like','%'.$request->search .'%')
                    ->orwhereHas('product', function($q) use($request){
                        $q->where('name','like','%'.$request->search .'%');
                    });
            }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('product_name', function($data){
                    return $data->product->name ?? null;
                })
                ->addColumn('action', function($data){
                    return $data->action_buttons;
                })
                ->addColumn('created_at', function($data){
                    return $data->created_at ? Carbon::parse($data->created_at)->format('d-m-Y') : null;
                })
                ->rawColumns(['action','created_at','product_name'])
                ->make(true);
        }
        return view('admin.slider.index');
    }

    public function create()
    {
        $products = Product::whereHas('merchant', function($q){
            $q->active();
        })->where('status','active')->get(['id','name']);
        return view('admin.slider.create', [
            'slider' => new Slider(),
            'products' => $products,
        ]);
    }
    public function store(Request $request)
    {
        $rules = $this->rules();

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image_url'] = $this->upload_image($file,'image/slider');
        }
        $slider = new Slider();
        $slider->sliderable_type = Product::class;
        $slider->sliderable_id = $data['product_id'];
        $slider->title = $data['title'];
        $slider->image_url = $data['image_url'];
        $slider->save();

        return redirect()
            ->route('sliders.index')
            ->with('success',t("Addition completed successfully"));
    }
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider == null) {
            return abort(404);
        }
        $products = Product::whereHas('merchant', function($q){
            $q->active();
        })->where('status','active')->get(['id','name']);
        return view('admin.slider.edit', compact('slider','products'));
    }
    public function update(Request $request, $id)
    {
        $rules = $this->rules($id);
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $slider = Slider::findOrFail($id);
        $data = $request->except('image');
        $data['image_url'] = '';
        $old_image = $slider->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image_url'] = $this->upload_image($file,'image/slider');
        }

        $slider->sliderable_type = Product::class;
        $slider->sliderable_id = $data['product_id'];
        $slider->title = $data['title'];
        if($data['image_url']){
            $slider->image_url = $data['image_url'];
        }
        $slider->save();

        if ($old_image && $old_image != $slider->image) {
            Storage::disk('public')->delete($old_image);
        }

        return redirect()
            ->route('sliders.index')
            ->with('success', t("The update completed successfully"));
    }
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider == null) {
            return abort(404);
        }else {
            $slider->delete();
        }

        return redirect()
            ->route('sliders.index')
            ->with('success', t("The deletion was completed successfully"));
    }
    protected function rules($id = 0)
    {
        $rules = [
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'product_id' => [
                'required',
                'exists:products,id',
            ]
        ];
        if($id == 0){
            $rules['image'] = ['required','image'];
        }else{
            $rules['image'] = ['image'];
        }
        return $rules;
    }
}
