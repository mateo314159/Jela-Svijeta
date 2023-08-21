<!-- resources/views/kategorije/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dodaj novu kategoriju</h1>
    <form action="{{ route('kategorije.store') }}" method="post">
        @csrf
        <div>
            <label for="naziv">Naziv kategorije:</label>
            <input type="text" name="naziv" id="naziv" required>
        </div>
        <button type="submit">Dodaj kategoriju</button>
    </form>
    <a href="{{ route('kategorije.index') }}">Natrag na popis kategorija</a>
@endsection
