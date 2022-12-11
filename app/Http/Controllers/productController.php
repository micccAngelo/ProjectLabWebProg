<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\products;

class productController extends Controller
{
    public function index()
    {
        $productData = products::all();
        return view('home', ['productData' => $productData]);
    }

    public function productDetail($id){
        $productDetail = products::findOrFail($id);
        return view('ProductDetail', ['productDetail'=> $productDetail]);
    } 
}
