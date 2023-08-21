<!-- resources/views/prijevodi/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Prijevod za ključ: {{ $prijevod->key }} ({{ $prijevod->jezik->naziv }})</h1>
    <p>{{ $prijevod->translation }}</p>
    <a href="{{ route('prijevodi.edit', $prijevod) }}">Uredi prijevod</a>
@endsection
