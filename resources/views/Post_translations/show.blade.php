@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails  {{ $post_translation->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $post_translation->id }}</p>
                    <p><strong>Post_id :</strong> {{ $post_translation->post_id }}</p>
                    <p><strong>Langue_id :</strong> {{ $post_translation->langue_id }}</p>
                    <p><strong>Contenu :</strong> {{ $post_translation->contenu }}</p>
                    <p><strong>Created_at :</strong> {{ $post_translation->created_at }}</p>
                    <p><strong>Updated_at :</strong> {{ $post_translation->updated_at }}</p>
                    <a href="{{route('post_translations.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('post_translations.edit', $post_translation->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection