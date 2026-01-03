@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails du Media   {{ $media->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $media->id }}</p>
                    <p><strong>Chemin :</strong> {{ $media->chemin }}</p>
                    <p><strong>Type Media ID :</strong> {{ $media->type_media_id }}</p>
                    <a href="{{route('medias.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('medias.edit', $media ->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection