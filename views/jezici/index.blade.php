<!-- resources/views/jezici/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Popis svih jezika</h1>
    <ul>
        @foreach($jezici as $jezik)
            <li>
                <a href="{{ route('jezici.show', $jezik) }}">{{ $jezik->naziv }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('jezici.create') }}">Dodaj novi jezik</a>
@endsection
