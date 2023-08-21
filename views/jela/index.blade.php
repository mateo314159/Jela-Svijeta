<!-- resources/views/jela/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Popis svih jela</h1>
    <ul>
        @foreach($jela as $jelo)
            <li>
                <a href="{{ route('jela.show', $jelo) }}">{{ $jelo->naziv }}</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('jela.create') }}">Dodaj novo jelo</a>
@endsection
