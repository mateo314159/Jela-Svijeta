<!-- resources/views/kategorije/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $kategorija->naziv }}</h1>
    <p>Jela u ovoj kategoriji:</p>
    <ul>
        @foreach($kategorija->jela as $jelo)
            <li>{{ $jelo->naziv }}</li>
        @endforeach
    </ul>
    <a href="{{ route('kategorije.edit', $kategorija) }}">Uredi kategoriju</a>
@endsection
