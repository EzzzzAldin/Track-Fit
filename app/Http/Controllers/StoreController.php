<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StoreController extends Controller
{
    public function index()
    {
        return view('store');
    }

    public function checkout(Request $request)
    {
        $isFemale = $request->routeIs('checkout.female');
        return view('checkout', compact('isFemale'));
    }

    public function product()
    {
        return view('product');
    }
}
