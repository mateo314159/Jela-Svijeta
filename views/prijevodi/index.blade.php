<!-- resources/views/prijevodi/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Popis svih prijevoda</h1>
    <ul>
        @foreach($prijevodi as $prijevod)
            <li>
                <a href="{{ route('prijevodi.show', $prijevod) }}">{{ $prijevod->key }} ({{ $prijevod->jezik->naziv }})</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('prijevodi.create') }}">Dodaj novi prijevod</a>
@endsection
