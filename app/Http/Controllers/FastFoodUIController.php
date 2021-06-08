<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class FastFoodUIController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('/fast-food', compact('sliders'));
    }
}
