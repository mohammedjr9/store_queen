<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class MerchantController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Merchant::select('*');
            if($request->search){
                $data->where('name','like','%'.$request->search .'%');
            }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image_path', function($row){
                    return $row->image_path;
                })
                ->addColumn('department', function($row){
                    return $row->typeMerchant->name;
                })
                ->addColumn('products_count', function($row){
                    return $row->products->count();
                })
                ->addColumn('created_at', function($data){
                    return $data->created_at ? Carbon::parse($data->created_at)->format('d-m-Y') : null;
                })
                ->addColumn('action', function($row){
                    $btn = '<a href="'.route('merchant_Shop', [$row->id]) .'" class="btn btn-sm btn-clean btn-icon"><i class="la la-cog"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action','created_at'])
                ->make(true);
        }
        return view('admin.merchant.index');
    }

    public function merchantShop($id)
    {
        $merchant = Merchant::findOrFail($id);
        if(!$merchant){
            abort(404);
        }
        $data['merchant'] = $merchant;
        $data['productCount'] = Product::where('merchant_id',$id)->count();
        $data['orderCount'] = Order::where('merchant_id',$id)->count();
        $data['orderCompleteCount'] = Order::where('merchant_id',$id)->where('merchant_status','complete')->count();
        $data['earnings'] = Order::where('merchant_id',$id)->sum('sub_total');
        $data['sold_products'] = 0;//
       /* OrderItem::whereHas('order', function($q) use($id){
            $q->where('store_id',$id);
        })->sum('quantity');
        Product::whereHas('order_items', function($q) {
            $q->whereHas('order',function($q) {
                $q->where('user_id',Auth('user')->id());
            });
        })->get();*/
        $data['users_review'] = [];//$merchant->reviews()->take(5)->get();
        return view('admin.merchant.details',$data);
    }


}
