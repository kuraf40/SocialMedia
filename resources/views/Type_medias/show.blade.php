@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails   {{ $type_media->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $type_media->id }}</p>
                    <p><strong>Nom :</strong> {{ $type_media->nom }}</p>
                    <a href="{{route('type_medias.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('type_medias.edit', $type_media->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection