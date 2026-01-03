@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'un Media</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('medias.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="chemin" class="form-label">Chemin</label>
                    <input type="text" class="form-control" id="chemin" name="chemin" required>
                </div>

                <div class="col-md-6">
                    <label for="type_media_id" class="form-label">type_media_id</label>
                    <input type="text" class="form-control" id="type_media_id" name="type_media_id" required>
                </div>
            </div>


            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('medias.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection