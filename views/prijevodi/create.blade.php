<!-- resources/views/prijevodi/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dodaj novi prijevod</h1>
    <form action="{{ route('prijevodi.store') }}" method="post">
        @csrf
        <div>
            <label for="key">Ključ:</label>
            <input type="text" name="key" id="key" required>
        </div>
        <div>
            <label for="jezik_id">Jezik:</label>
            <select name="jezik_id" id="jezik_id">
                @foreach($jezici as $jezik)
                    <option value="{{ $jezik->id }}">{{ $jezik->naziv }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="translation">Prijevod:</label>
            <textarea name="translation" id="translation" required></textarea>
        </div>
        <button type="submit">Dodaj prijevod</button>
    </form>
    <a href="{{ route('prijevodi.index') }}">Natrag na popis prijevoda</a>
@endsection
