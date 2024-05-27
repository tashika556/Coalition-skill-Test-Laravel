<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

   
    public function store(Request $request)
    {
        
    }


    public function edit(Product $product)
    {
        
    }

   

}
