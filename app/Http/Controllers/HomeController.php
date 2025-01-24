<?php

namespace App\Http\Controllers;

use App\Http\Services;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $products = Product::get();

        return view('index',compact('products'));
    }

     
    public function home()
    {
        return view('home');
    }


    public function createProduct(ProductStoreRequest $request)
    {
        
        $request->request->add(['data' => json_encode(["flat"])]);

        return Product::create($request->all());;
       
    }


    public function updateProduct(ProductUpdateRequest $request, Product $product)
    {

        $product->update($request->all());

        return $product;
    }
    

    public function product(Product $product) {
        return view('product',compact('product'));
    }
}
