@extends('main')

@section('content')

<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-lg-12">
            <h2>Popis jela</h2>
            <!-- Gumb za dodavanje novog jela -->
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addJeloModal">Dodaj novo jelo</button>
        </div>
    </div>

    <!-- Popis svih jela -->
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Naziv</th>
                        <th>Kategorija</th>
                        <th>Tagovi</th>
                        <!-- Dodajte više kolona prema potrebi -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($jela as $jelo)
                        <tr>
                            <td>{{ $jelo->naziv }}</td>
                            <td>{{ $jelo->kategorija->naziv }}</td>
                            <td>
                                @foreach($jelo->tagovi as $tag)
                                    {{ $tag->naziv }},
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal za dodavanje novog jela -->
    <div class="modal fade" id="addJeloModal" tabindex="-1" aria-labelledby="addJeloModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addJeloModalLabel">Dodaj novo jelo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jela.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="naziv" class="form-label">Naziv jela</label>
                            <input type="text" class="form-control" id="naziv" name="naziv" required>
                        </div>
                        <!-- Dodajte ostala polja prema potrebi -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Spremi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
