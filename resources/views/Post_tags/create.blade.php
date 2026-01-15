@extends('backlayout2')

@section('content')
<h4 class="text-center"><strong>Création </strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('post_tags.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="post_id" class="form-label"> Post_id</label>
                    <input type="text" class="form-control" id="post_id" name="post_id" required>
                </div>

                <div class="col-md-6">
                    <label for="tag_id" class="form-label">Tag_id</label>
                    <input type="text" class="form-control" id="tag_id" name="tag_id" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('post_tags.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection