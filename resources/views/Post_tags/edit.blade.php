@extends('backlayout2')

@section('content')
<div class="container ">
    <h4 class="text-center">Modifier le ...</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('post_tags.update', $post_tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="post_id" class="form-label">Post_id</label>
                <input type="text" class="form-control" id="post_id" name="post_id" value="{{ $post_tag->post_id }}" required>
            </div>

            <div class="col-md-6">
                <label for="tag_id" class="form-label">Tag_id</label>
                <input type="text" class="form-control" id="tag_id" name="tag_id" value="{{ $post_tag->tag_id }}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('post_tags.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection