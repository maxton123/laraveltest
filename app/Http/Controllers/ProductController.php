<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
//use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products= Product::all();

        return view('product',['products'=>$products]);

    }
    public function create()
    {
        return view('create');

    }

    public function store(Product $productModel, Request $request)
    {
        //dd($request->all());
        $validate=[
            'name'=> 'required'
        ];
        $this->validate($request,$validate);
        //$disk = Storage::disk('category_images');
        $file = $request->file('image_file');
        $filename = $file->getClientOriginalName();
        $request['image'] = $filename;
        $file->move('img', $filename);




        $productModel->create($request->all());
        return redirect()->route('prod');
    }
}
