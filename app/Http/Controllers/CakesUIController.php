<?php

namespace App\Http\Controllers;

use App\Cake;
use Illuminate\Http\Request;

class CakesUIController extends Controller
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
        $cakes = Cake::all();
        return view('/cakes', compact('cakes'));
    }
}
