<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;
use DataTables;

class ProductsController extends Controller
{
    public function index()
    {
        return view('backend.products.index');
    }

    public function create()
    {
        return view('backend.products.creator');
    }

    public function DataDetails()
    {

        $category = Products::select(['id', 'product_name', 'icon','product_type','created_at']);


        return Datatables::of($category)
            ->editColumn('status',function ($row){
                if ($row->status == 1)
                {
                    return 'Enabled';
                }else{
                    return 'Disabled';
                }
            })

            ->addColumn('action', function($row){
                $btn = '<a href="" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<a href="" class="edit btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </a>';
                return  $btn.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }
}
