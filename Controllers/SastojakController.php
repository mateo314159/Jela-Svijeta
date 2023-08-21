<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sastojak;

class SastojakController extends Controller
{
    public function index()
    {
        $sastojci = Sastojak::all();
        return view('sastojci.index', compact('sastojci'));
    }

    // ... ostale metode slično kao u JeloController...
}
