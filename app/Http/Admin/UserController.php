<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\TypeMerchant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            if($request->search){
                $data->where('first_name','like','%'.$request->search .'%');
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('status', function($row){
                    $checked = $row->status ? 'checked':'';
                    $btn = '<div class="form-check form-switch form-check-custom form-check-success form-check-solid">
                                <input class="form-check-input" type="checkbox" '. $checked.' onchange="changeStatus('.$row->id.')"/>
                            </div>';
                    return $btn;
                })->addColumn('name', function($row){
                    return $row->first_name.' '.$row->last_name;
                })->addColumn('image_path', function($row){
                    return $row->image_path;
                })->addColumn('action', function($row){
                    $btn = '<a href="'.route('user_Shop', [$row->id]) .'" class="btn btn-sm btn-clean btn-icon"><i class="la la-cog"></i></a>';
                    return $btn;
                })->addColumn('created_at', function($row){
                    return $row->created_at ? Carbon::parse($row->created_at)->format('d-m-Y') : null;
                })->rawColumns(['action','created_at','status'])
                ->make(true);
        }
        return view('admin.user.index');
    }

    public function userShop($id)
    {
        $user = User::findOrFail($id);
        if(!$user){
            abort(404);
        }
        $data['user'] = $user;
        $data['productCount'] = Product::where('user_id',$id)->count();
        $data['orderCount'] = 0;//Order::where('store_id',$id)->count();
        $data['earnings'] = 0;//Order::where('store_id',$id)->sum('sub_total');
        $data['sold_products'] = 0;//
        $data['users_review'] = [];//$merchant->reviews()->take(5)->get();
        return view('admin.user.details',$data);
    }
}
