<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartsController extends Controller
{
    public function parts()
    {
        return view('home.parts');
    }
}
