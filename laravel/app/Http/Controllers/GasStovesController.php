<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GasStoves;

class GasStovesController extends Controller
{
    public function gasStoves()
    {
        $gasStoves = GasStoves::all();
        return view('gasStoves',compact('gasStoves'));
    }

    public function create()
    {
        return view('create');
    }

    public function addGasStove(Request $request)
    {
        $size = $request->input('size');
        $color = $request->input('color');
        $price = $request->input('price');
        $brand = $request->input('brand');

        $gasStove = new GasStoves();
        $gasStove->size = $size;
        $gasStove->color = $color;
        $gasStove->price = $price;
        $gasStove->brand = $brand;

        $gasStove->save();
        return redirect('/gasStoves');
    }

    public function compare()
    {
        $mostcheapest = GasStoves::orderBy('price', 'desc')->first();

        return view('compare', ['mostcheapest' => $mostcheapest]);
    }
}