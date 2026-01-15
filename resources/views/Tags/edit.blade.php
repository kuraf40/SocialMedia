@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier de Tag</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row md-3">

            <div class="md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $tag->nom }}" required>
            </div>

        </div>
        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('tags.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection