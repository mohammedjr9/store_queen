<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CityController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = City::select('*');
            if($request->search){
                $data->where('name','like','%'.$request->search .'%');
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('status', function($row){
                    $checked = $row->status ? 'checked':'';
                    $btn = '<div class="form-check form-switch form-check-custom form-check-success form-check-solid">
                                <input class="form-check-input" type="checkbox" '. $checked.' onchange="changeStatus('.$row->id.')"/>
                            </div>';
                    return $btn;
                })
                ->addColumn('action', function($row){
                    return $row->action_buttons;
                })
                ->addColumn('created_at', function($row){
                    return $row->created_at ? Carbon::parse($row->created_at)->format('d-m-Y') : null;
                })
                ->rawColumns(['action','created_at','status'])
                ->make(true);
        }
        return view('admin.city.index');
    }
    public function create()
    {
        return view('admin.city.create', [
            'city' => new City(),
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

        $City = City::create($data);

        return redirect()
            ->route('cities.index')
            ->with('success', t("Addition completed successfully"));
    }
    public function edit($id)
    {

        $city = City::findOrFail($id);
        if ($city == null) {
            return abort(404);
        }

        return view('admin.city.edit', compact('city'));
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
        $City = City::findOrFail($id);

        $data = $request->except('image');

       $old_image = $City->image;

       if ($request->hasFile('image')) {
           $file = $request->file('image');
           $data['icon_url'] = $this->upload_image($file,'image/cities');
       }

        $City->update($data);

       if ($old_image && $old_image != $City->image) {
           Storage::disk('public')->delete($old_image);
       }

        return redirect()
            ->route('cities.index')
            ->with('success', t("The update completed successfully"));
    }
    protected function rules($id = 0)
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:cities,name,'.$id,
            ],
        ];
    }
    public function changeStatus(Request $request)
    {
        if($request->id){
            $City = City::findOrFail($request->id);
            if ($City) {

                if($City->status){
                    $City->update(['status' => 0]);
                }else{
                    $City->update(['status' => 1]);
                }
                return response()->json(['status' => 'success']);
            }
        }
        return response()->json(['status' => 'fail']);
    }
}
