<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Reseller;
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

    public function delete($id)
    {
        Products::where('id',$id)->delete();
        return back();
    }

    public function update(Request $request)
    {
        $product = Products::where('id',$request->product_id)->update([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'icon' => $request->icon,
            'images' => $request->images,
            'category' => $request->category,
            'screenshots' => $request->screenshots,
            'short_description' => $request->short_description,
            'link' => $request->link,
            'price' => $request->price,
            'product_type' => $request->product_type,
            'slug' => $request->slug,
        ]);
        return redirect()->route('admin.products');
    }

    public function edit($id)
    {
        $product = Products::where('id',$id)->first();
        return view('backend.products.edit',[
            'products_details' => $product
        ]);
    }

    public function store(Request $request)
    {
        $product = new Products;
        $product->product_name = $request->product_name;
        $product->description = $request->description;
        $product->icon = $request->icon;
        $product->images = $request->images;
        $product->category = $request->category;
        $product->screenshots = $request->screenshots;
        $product->short_description = $request->short_description;
        $product->link = $request->link;
        $product->price = $request->price;
        $product->product_type = $request->product_type;
        $product->slug = $request->slug;
        $product->save();
        return redirect()->route('admin.products');

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
                $btn = '<a href="'.route('admin.products.edit',$row->id).'" class="edit btn btn-primary btn-sm" style="margin-right: 10px"><i class="fa fa-edit"></i> Edit </a>';
                $btn2 = '<button  id="'.$row->id.'" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete </button>';
                return  $btn.$btn2;
            })
            ->rawColumns(['action'])
            ->make();
    }
}
