<?php

namespace App\Http\Controllers;

use Api\Products;    

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index () {
        return Products::all()->get();
    }

    public function store(Request $request)
    {
        return Products::create($request->all()->get());
    }
}
