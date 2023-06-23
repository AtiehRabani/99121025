<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fridges;

class FridgesController extends Controller
{
    public function fridges()
    {
        $fridges = Fridges::all();
        return view('fridges',compact('fridges'));
    }

    public function create()
    {
        return view('create');
    }

    public function addFridge(Request $request)
    {
        $size = $request->input('size');
        $color = $request->input('color');
        $price = $request->input('price');
        $brand = $request->input('brand');

        $fridge = new Fridges();
        $fridge->size = $size;
        $fridge->color = $color;
        $fridge->price = $price;
        $fridge->brand = $brand;

        $fridge->save();
        return redirect('/fridges');
    }

    public function compare()
    {
        $mostcheapest = Fridges::orderBy('price', 'desc')->first();

        return view('compare', ['mostcheapest' => $mostcheapest]);
    }
}