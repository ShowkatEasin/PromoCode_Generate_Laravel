<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store(Request $request){
       
        Product::create($request->all());
        return redirect('/addsales');
    }
}
