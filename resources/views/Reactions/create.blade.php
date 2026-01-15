@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'une Reaction</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('reactions.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
            </div>


            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('reactions.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection