<!-- resources/views/jezici/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Uredi jezik: {{ $jezik->naziv }}</h1>
    <form action="{{ route('jezici.update', $jezik) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="naziv">Naziv jezika:</label>
            <input type="text" name="naziv" id="naziv" value="{{ $jezik->naziv }}" required>
        </div>
        <div>
            <label for="kod">Kod jezika:</label>
            <input type="text" name="kod" id="kod" value="{{ $jezik->kod }}" required>
        </div>
        <button type="submit">Spremi promjene</button>
    </form>
    <a href="{{ route('jezici.index') }}">Natrag na popis jezika</a>
@endsection
