@extends('backlayout2')

@section('content')
<div class="container ">
    <h4 class="text-center">Modifier le ...</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('post_translations.update', $post_translation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="post_id" class="form-label">Post_id</label>
                <input type="text" class="form-control" id="post_id" name="post_id" value="{{ $post_translation->post_id }}" required>
            </div>

            <div class="col-md-6">
                <label for="langue_id" class="form-label">Langue_id</label>
                <input type="text" class="form-control" id="langue_id" name="langue_id" value="{{ $post_translation->langue_id }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="md-6">
                <label for="contenu" class="form-label">Contenu</label>
                <input type="text" class="form-control" id="contenu" name="contenu" value="{{ $post_translation->contenu }}" required>
            </div>
        </div>

        

        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('post_translations.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection