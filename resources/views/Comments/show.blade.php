@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails du commentaire   {{ $comment->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $comment->id }}</p>
                    <p><strong>Texte :</strong> {{ $comment->texte }}</p>
                    <p><strong>Auteur_id :</strong> {{ $comment->auteur_id }}</p>
                    <p><strong>Post_id :</strong> {{ $comment->post_id }}</p>
                    <a href="{{route('comments.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('comments.edit', $comment->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection