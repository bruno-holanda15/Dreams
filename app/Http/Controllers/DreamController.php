<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DreamController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function create()
    {
        return view('dreams.create');
    }
}
