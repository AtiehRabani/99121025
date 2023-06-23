<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishwasher;

class DishwashersController extends Controller
{
    public function dishwashers()
    {
        $dishwashers = Dishwasher::all();
        return view('dishwashers',compact('dishwashers'));
    }

    public function create()
    {
        return view('create');
    }

    public function addDishwasher(Request $request)
    {
        $size = $request->input('size');
        $color = $request->input('color');
        $price = $request->input('price');
        $brand = $request->input('brand');

        $dishwasher = new Dishwasher();
        $dishwasher->size = $size;
        $dishwasher->color = $color;
        $dishwasher->price = $price;
        $dishwasher->brand = $brand;

        $dishwasher->save();
        return redirect('/dishwashers');
    }

    public function compare()
    {
        $mostcheapest = Dishwasher::orderBy('price', 'desc')->first();

        return view('compare', ['mostcheapest' => $mostcheapest]);
    }
}