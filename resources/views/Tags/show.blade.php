@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Infos sur Tag:   {{ $tag->nom }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $tag->id }}</p>
                    <p><strong>Nom :</strong> {{ $tag->nom }}</p>
                    <p><strong>Created_at :</strong> {{ $tag->created_at }}</p>
                    <p><strong>Updated_at:</strong>{{$tag->updated_at}}</p>
                    <a href="{{route('tags.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection