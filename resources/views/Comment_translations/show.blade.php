@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails  {{ $comment_translation->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $comment_translation->id }}</p>
                    <p><strong>Comment_id :</strong> {{ $comment_translation->comment_id }}</p>
                    <p><strong>Langue_id :</strong> {{ $comment_translation->langue_id }}</p>
                    <p><strong>Contenu :</strong> {{ $comment_translation->contenu }}</p>
                    <p><strong>Created_at :</strong> {{ $comment_translation->created_at }}</p>
                    <p><strong>Updated_at :</strong> {{ $comment_translation->updated_at }}</p>
                    <a href="{{route('comment_translations.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('comment_translations.edit', $comment_translation->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection