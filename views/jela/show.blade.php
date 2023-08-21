<!-- resources/views/jela/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $jelo->naziv }}</h1>
    <p>{{ $jelo->opis }}</p>
    <a href="{{ route('jela.edit', $jelo) }}">Uredi jelo</a>
@endsection
