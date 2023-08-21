<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jezik;

class JezikController extends Controller
{
    public function index()
    {
        $jezici = Jezik::all();
        return view('jezici.index', compact('jezici'));
    }

    // ... ostale metode slično kao u JeloController...
}
