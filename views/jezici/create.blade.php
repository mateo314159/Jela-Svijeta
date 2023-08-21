<!-- resources/views/jezici/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dodaj novi jezik</h1>
    <form action="{{ route('jezici.store') }}" method="post">
        @csrf
        <div>
            <label for="naziv">Naziv jezika:</label>
            <input type="text" name="naziv" id="naziv" required>
        </div>
        <div>
            <label for="kod">Kod jezika:</label>
            <input type="text" name="kod" id="kod" required>
        </div>
        <button type="submit">Dodaj jezik</button>
    </form>
    <a href="{{ route('jezici.index') }}">Natrag na popis jezika</a>
@endsection
