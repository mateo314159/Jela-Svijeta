<!-- resources/views/kategorije/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Popis svih kategorija</h1>
    <ul>
        @foreach($kategorije as $kategorija)
            <li>
                <a href="{{ route('kategorije.show', $kategorija) }}">{{ $kategorija->naziv }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('kategorije.create') }}">Dodaj novu kategoriju</a>
@endsection
