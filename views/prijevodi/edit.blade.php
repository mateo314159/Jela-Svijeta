<!-- resources/views/prijevodi/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Uredi prijevod: {{ $prijevod->key }} ({{ $prijevod->jezik->naziv }})</h1>
    <form action="{{ route('prijevodi.update', $prijevod) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="key">Ključ:</label>
            <input type="text" name="key" id="key" value="{{ $prijevod->key }}" required>
        </div>
        <div>
            <label for="jezik_id">Jezik:</label>
            <select name="jezik_id" id="jezik_id">
                @foreach($jezici as $jezik)
                    <option value="{{ $jezik->id }}" {{ $prijevod->jezik_id == $jezik->id ? 'selected' : '' }}>{{ $jezik->naziv }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="translation">Prijevod:</label>
            <textarea name="translation" id="translation" required>{{ $prijevod->translation }}</textarea>
        </div>
        <button type="submit">Spremi promjene</button>
    </form>
    <a href="{{ route('prijevodi.index') }}">Natrag na popis prijevoda</a>
@endsection
