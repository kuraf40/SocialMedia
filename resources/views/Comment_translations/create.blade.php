@extends('backlayout2')

@section('content')
<h4 class="text-center"><strong>Création </strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('comment_translations.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="comment_id" class="form-label"> Comment_id</label>
                    <input type="text" class="form-control" id="comment_id" name="comment_id" required>
                </div>

                <div class="col-md-6">
                    <label for="langue_id" class="form-label">Langue_id</label>
                    <input type="text" class="form-control" id="langue_id" name="langue_id" required>
                </div>
            </div>
            <div class=" row mb-3">
                <div class="md-6">
                    <label for="contenu" class="form-label"> Contenu</label>
                    <input type="text" class="form-control" id="contenu" name="contenu" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('comment_translations.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection