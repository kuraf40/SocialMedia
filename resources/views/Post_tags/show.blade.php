@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails du Follow   {{ $post_tag->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $post_tag->id }}</p>
                    <p><strong>Post_id :</strong> {{ $post_tag->post_id }}</p>
                    <p><strong>Tag_id :</strong> {{ $post_tag->tag_id }}</p>
                    <p><strong>Created_at :</strong> {{ $post_tag->created_at }}</p>
                    <p><strong>Updated_at :</strong> {{ $post_tag->updated_at }}</p>
                    <a href="{{route('post_tags.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('post_tags.edit', $post_tag->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection