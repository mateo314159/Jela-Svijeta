<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jelo;
use App\Jezik;
use App\JeloPrijevod;

class JeloPrijevodController extends Controller
{
    public function index()
    {
        $prijevodi = JeloPrijevod::all();
        return view('prijevodi.jela.index', compact('prijevodi'));
    }

    public function create()
    {
        $jela = Jelo::all();
        $jezici = Jezik::all();
        return view('prijevodi.jela.create', compact('jela', 'jezici'));
    }

    public function store(Request $request)
    {
        $prijevod = JeloPrijevod::create($request->all());
        return redirect()->route('jelo_prijevodi.index');
    }

    public function edit(JeloPrijevod $prijevod)
    {
        $jela = Jelo::all();
        $jezici = Jezik::all();
        return view('prijevodi.jela.edit', compact('prijevod', 'jela', 'jezici'));
    }

    public function update(Request $request, JeloPrijevod $prijevod)
    {
        $prijevod->update($request->all());
        return redirect()->route('jelo_prijevodi.index');
    }

    public function destroy(JeloPrijevod $prijevod)
    {
        $prijevod->delete();
        return redirect()->route('jelo_prijevodi.index');
    }
}
