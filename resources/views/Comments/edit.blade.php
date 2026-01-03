@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier le Commentaire</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="md-3">

            <div class="">
                <label for="texte" class="form-label">Texte</label>
                <input type="text" class="form-control" id="texte" name="texte" value="{{ $comment->texte }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="auteur_id" class="form-label">Auteur_id</label>
                <input type="text" class="form-control" id="auteur_id" name="auteur_id" value="{{ $comment->auteur_id }}" required>
            </div>

            <div class="col-md-6">
                <label for="post_id" class="form-label">Post_id</label>
                <input type="text" class="form-control" id="post_id" name="post_id" value="{{ $comment->post_id }}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('comments.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection