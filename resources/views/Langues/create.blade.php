@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'une Langue</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('langues.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>

                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="locale" class="form-label">Local</label>
                    <input type="text" class="form-control" id="locale" name="locale" required>
                </div>

                <div class="col-md-6">
                    <label for="direction" class="form-label">Direction</label>
                    <input type="text" class="form-control" id="direction" name="direction" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('langues.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection