<!-- resources/views/jela/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Uredi jelo: {{ $jelo->naziv }}</h1>
    <form action="{{ route('jela.update', $jelo) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="naziv">Naziv jela:</label>
            <input type="text" name="naziv" id="naziv" value="{{ $jelo->naziv }}" required>
        </div>
        <div>
            <label for="opis">Opis jela:</label>
            <textarea name="opis" id="opis">{{ $jelo->opis }}</textarea>
        </div>
        <button type="submit">Spremi promjene</button>
    </form>
    <a href="{{ route('jela.index') }}">Natrag na popis jela</a>
@endsection
