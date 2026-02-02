@extends('backlayout2')

@section('content')
<div class="container ">
    <h4 class="text-center">Modifier le ...</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('comment_translations.update', $comment_translation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="comment_id" class="form-label">Comment_id</label>      
                <input type="text" class="form-control" id="comment_id" name="comment_id" value="{{ $comment_translation->comment_id }}" required>
            </div>

            <div class="col-md-6">
                <label for="langue_id" class="form-label">Langue_id</label>
                <input type="text" class="form-control" id="langue_id" name="langue_id" value="{{ $comment_translation->langue_id }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="md-6">
                <label for="contenu" class="form-label">Contenu</label>
                <input type="text" class="form-control" id="contenu" name="contenu" value="{{ $comment_translation->contenu }}" required>
            </div>
        </div>

        

        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('comment_translations.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection