@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier les informations media</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('medias.update', $media->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row md-3">

            <div class="col-md-6">
                <label for="chemin" class="form-label">Chemin</label>
                <input type="text" class="form-control" id="chemin" name="chemin" value="{{ $media->chemin }}" required>
            </div>

            <div class="col-md-6">
                <label for="type_media_id" class="form-label">Type Media ID</label>
                <input type="text" class="form-control" id="type_media_id" name="type_media_id" value="{{ $media->type_media_id }}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('medias.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection