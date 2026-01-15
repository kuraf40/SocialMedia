@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier de reaction</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('reactions.update', $reaction->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row md-3">

            <div class="md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $reaction->nom }}" required>
            </div>

        </div>
        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('reactions.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection