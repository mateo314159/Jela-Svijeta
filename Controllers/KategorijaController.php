<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategorija;

class KategorijaController extends Controller
{
    public function index()
    {
        $kategorije = Kategorija::all();
        return view('kategorije.index', compact('kategorije'));
    }

    // ... ostale metode slično kao u JeloController...
}
