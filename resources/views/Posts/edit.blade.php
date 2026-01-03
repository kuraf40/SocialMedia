@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier le Post</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="md-3">

            <div class="">
                <label for="contenu" class="form-label">Contenu</label>
                <input type="text" class="form-control" id="contenu" name="contenu" value="{{ $post->contenu }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="auteur_id" class="form-label">Auteur_id</label>
                <input type="text" class="form-control" id="auteur_id" name="auteur_id" value="{{ $post->auteur_id }}" required>
            </div>

            <div class="col-md-6">
                <label for="media_id" class="form-label">Media_id</label>
                <input type="text" class="form-control" id="media_id" name="media_id" value="{{ $post->media_id }}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('posts.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection