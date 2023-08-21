<!-- resources/views/sastojci/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dodaj novi sastojak</h1>
    <form action="{{ route('sastojci.store') }}" method="post">
        @csrf
        <div>
            <label for="naziv">Naziv sastojka:</label>
            <input type="text" name="naziv" id="naziv" required>
        </div>
        <button type="submit">Dodaj sastojak</button>
    </form>
    <a href="{{ route('sastojci.index') }}">Natrag na popis sastojaka</a>
@endsection
