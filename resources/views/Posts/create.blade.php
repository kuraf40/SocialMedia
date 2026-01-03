@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'un Post</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class=" mb-3">
                <div class="">
                    <label for="contenu" class="form-label">contenu</label>
                    <input type="text" class="form-control" id="contenu" name="contenu" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="auteur_id" class="form-label"> Auteur_id</label>
                    <input type="text" class="form-control" id="auteur_id" name="auteur_id" required>
                </div>

                <div class="col-md-6">
                    <label for="media_id" class="form-label">Media_id</label>
                    <input type="text" class="form-control" id="media_id" name="media_id" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('posts.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection