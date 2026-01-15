@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails    {{ $post_reaction->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $post_reaction->id }}</p>
                    <p><strong>User_id :</strong> {{ $post_reaction->user_id }}</p>
                    <p><strong>Post_id :</strong> {{ $post_reaction->post_id }}</p>
                    <p><strong>Reaction_id :</strong> {{ $post_reaction->reaction_id }}</p>
                    <p><strong>Created_at :</strong> {{ $post_reaction->created_at }}</p>
                    <p><strong>Updated_at :</strong> {{ $post_reaction->updated_at }}</p>
                    <a href="{{route('post_reactions.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('post_reactions.edit', $post_reaction->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection