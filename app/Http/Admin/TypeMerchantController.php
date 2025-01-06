<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TypeMerchant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class TypeMerchantController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = TypeMerchant::select('*');
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
                })->addColumn('image_path', function($row){
                    return $row->image_path;
                })->addColumn('action', function($row){
                    return $row->action_buttons;
                })->addColumn('created_at', function($row){
                    return $row->created_at ? Carbon::parse($row->created_at)->format('d-m-Y') : null;
                })->rawColumns(['action','created_at','status'])
                ->make(true);
        }
        return view('admin.type_merchants.index');
    }
    public function create()
    {
        return view('admin.type_merchants.create', [
            'type_merchant' => new TypeMerchant(),
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
            $data['icon_url'] = $this->upload_image($file,'image/typeMerchants');
        }
        $type_merchant = TypeMerchant::create($data);

        return redirect()
            ->route('typeMerchants.index')
            ->with('success', t("Addition completed successfully"));
    }
    public function edit($id)
    {
        $type_merchant = TypeMerchant::findOrFail($id);
        if ($type_merchant == null) {
            return abort(404);
        }

        return view('admin.type_merchants.edit', compact('type_merchant'));
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
        $type_merchant = TypeMerchant::findOrFail($id);

        $data = $request->except('image');

       $old_image = $type_merchant->image;

       if ($request->hasFile('image')) {
           $file = $request->file('image');
           $data['icon_url'] = $this->upload_image($file,'image/typeMerchants');
       }

        $type_merchant->update($data);

       if ($old_image && $old_image != $type_merchant->image) {
           Storage::disk('public')->delete($old_image);
       }

        return redirect()
            ->route('typeMerchants.index')
            ->with('success', t("The update completed successfully"));
    }
    protected function rules($id = 0)
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                'unique:type_merchants,name,'.$id,
            ],
        ];
    }
    public function changeStatus(Request $request)
    {
        if($request->id){
            $type_merchant = TypeMerchant::findOrFail($request->id);
            if ($type_merchant) {
                if($type_merchant->status){
                    $type_merchant->update(['status' => 0]);
                }else{
                    $type_merchant->update(['status' => 1]);
                }
                return response()->json(['status' => 'success']);
            }
        }
        return response()->json(['status' => 'fail']);
    }
}
