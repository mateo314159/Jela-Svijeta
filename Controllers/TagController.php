<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tagovi = Tag::all();
        return view('tagovi.index', compact('tagovi'));
    }

    // ... ostale metode slično kao u JeloController...
}
