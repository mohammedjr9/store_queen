<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::select('*');
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
                ->addColumn('image_path', function($row){
                    return $row->image_path;
                })
                ->addColumn('action', function($row){
                    return $row->action_buttons;
                })
                ->addColumn('created_at', function($row){
                    return $row->created_at ? Carbon::parse($row->created_at)->format('d-m-Y') : null;
                })
                ->rawColumns(['image_path','action','created_at','status'])
                ->make(true);
        }
        return view('admin.service.index');
    }
    public function create()
    {
        return view('admin.service.create', [
            'service' => new Service(),
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
            $data['icon_url'] = $this->upload_image($file,'image/services');
        }

        $Service = Service::create($data);

        return redirect()
            ->route('services.index')
            ->with('success', t("Addition completed successfully"));
    }
    public function edit($id)
    {

        $Service = Service::findOrFail($id);
        if ($Service == null) {
            return abort(404);
        }

        return view('admin.service.edit', compact('Service'));
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
        $Service = Service::findOrFail($id);

        $data = $request->except('image');

        $old_image = $Service->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['icon_url'] = $this->upload_image($file,'image/services');
        }

        $Service->update($data);

       if ($old_image && $old_image != $Service->image) {
           Storage::disk('public')->delete($old_image);
       }

        return redirect()
            ->route('services.index')
            ->with('success', t("The update completed successfully"));
    }
    protected function rules($id = 0)
    {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:services,name,'.$id,
            ],
           //'|max:50|dimensions:min_width=150,min_height=150,max_width=300,max_height=300', // 50KB
        ];
        if($id == 0){
            $rules['image'] =['required','image'];
        }else{
            $rules['image'] =['image'];
        }
        return $rules;
    }
    public function changeStatus(Request $request)
    {

        if($request->id){
            $Service = Service::findOrFail($request->id);
            if ($Service) {

                if($Service->status){
                    $Service->update(['status' => 0]);
                }else{
                    $Service->update(['status' => 1]);
                }
                return response()->json(['status' => 'success']);
            }
        }
        return response()->json(['status' => 'fail']);
    }
}
