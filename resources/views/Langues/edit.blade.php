@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier les informations utilisateur</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('langues.update', $langue->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row md-3">

            <div class="col-md-6">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $langue->code }}" required>
            </div>

            <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $langue->nom }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="locale" class="form-label">Local</label>
                <input type="text" class="form-control" id="locale" name="locale" value="{{ $langue->locale }}" required>
            </div>

            <div class="col-md-6">
                <label for="direction" class="form-label">Direction</label>
                <input type="text" class="form-control" id="direction" name="direction" value="{{ $langue->direction }}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('langues.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection