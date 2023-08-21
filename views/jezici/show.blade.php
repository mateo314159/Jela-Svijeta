<!-- resources/views/jezici/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalji za jezik: {{ $jezik->naziv }}</h1>
    <p>Kod jezika: {{ $jezik->kod }}</p>
    <a href="{{ route('jezici.edit', $jezik) }}">Uredi jezik</a>
@endsection
