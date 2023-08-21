<!-- resources/views/kategorije/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Uredi kategoriju: {{ $kategorija->naziv }}</h1>
    <form action="{{ route('kategorije.update', $kategorija) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="naziv">Naziv kategorije:</label>
            <input type="text" name="naziv" id="naziv" value="{{ $kategorija->naziv }}" required>
        </div>
        <button type="submit">Spremi promjene</button>
    </form>
    <a href="{{ route('kategorije.index') }}">Natrag na popis kategorija</a>
@endsection
