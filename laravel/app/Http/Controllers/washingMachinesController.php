<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WashingMachines;

class WashingMachinesController extends Controller
{
    public function washingMachines()
    {
        $washingMachines = WashingMachines::all();
        return view('washingMachines',compact('washingMachines'));
    }

    public function create()
    {
        return view('create');
    }

    public function addWashingMachine(Request $request)
    {
        $size = $request->input('size');
        $color = $request->input('color');
        $price = $request->input('price');
        $brand = $request->input('brand');

        $washingMachine = new WashingMachines();
        $washingMachine->size = $size;
        $washingMachine->color = $color;
        $washingMachine->price = $price;
        $washingMachine->brand = $brand;

        $washingMachine->save();
        return redirect('/washingMachines');
    }

    public function compare()
    {
        $mostcheapest = WashingMachines::orderBy('price', 'desc')->first();

        return view('compare', ['mostcheapest' => $mostcheapest]);
    }
}