<?php

namespace App\Http\Controllers;

use App\Http\Services;
use Illuminate\Http\Request;
use App\Models\Product;


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


    
}
