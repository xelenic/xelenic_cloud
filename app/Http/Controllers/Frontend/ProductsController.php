<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

    }

    public function show($slug)
    {
        $product = Products::where('slug',$slug)->first();

        return view('frontend.products.index',[
            'products_details' => $product
        ]);
    }

}
