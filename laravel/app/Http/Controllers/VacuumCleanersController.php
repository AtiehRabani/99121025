<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VacuumCleaners;

class VacuumCleanersController extends Controller
{
    public function vacuumCleaners()
    {
        $vacuumCleaners = VacuumCleaners::all();
        return view('vacuum-cleaners',compact('vacuumCleaners'));
    }

    public function create()
    {
        return view('create');
    }

    public function addVacuumCleaner(Request $request)
    {
        $size = $request->input('size');
        $color = $request->input('color');
        $price = $request->input('price');
        $brand = $request->input('brand');

        $vacuumCleaner = new VacuumCleaners();
        $vacuumCleaner->size = $size;
        $vacuumCleaner->color = $color;
        $vacuumCleaner->price = $price;
        $vacuumCleaner->brand = $brand;

        $vacuumCleaner->save();
        return redirect('/vacuum-cleaners');
    }

    public function compare()
    {
        $mostcheapest = VacuumCleaners::orderBy('price', 'desc')->first();

        return view('compare', ['mostcheapest' => $mostcheapest]);
    }
}