<!-- resources/views/jela/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dodaj novo jelo</h1>
    <form action="{{ route('jela.store') }}" method="post">
        @csrf
        <div>
            <label for="naziv">Naziv jela:</label>
            <input type="text" name="naziv" id="naziv" required>
        </div>
        <div>
            <label for="opis">Opis jela:</label>
            <textarea name="opis" id="opis"></textarea>
        </div>
        <button type="submit">Dodaj jelo</button>
    </form>
    <a href="{{ route('jela.index') }}">Natrag na popis jela</a>
@endsection
