<?php

namespace App\Http\Controllers;

use App\Sweet;
use Illuminate\Http\Request;

class SweetUIController extends Controller
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
        $sweets = Sweet::all();
        return view('/chocolates&sweets', compact('sweets'));
    }
}
