@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails du Posts   {{ $post->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $post->id }}</p>
                    <p><strong>Contenu :</strong> {{ $post->contenu }}</p>
                    <p><strong>Auteur_id :</strong> {{ $post->auteur_id }}</p>
                    <p><strong>Media_id :</strong> {{ $post->media_id }}</p>
                    <a href="{{route('posts.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection