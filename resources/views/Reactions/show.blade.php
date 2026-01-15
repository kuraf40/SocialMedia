@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Infos sur Reaction:   {{ $reaction->nom }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $reaction->id }}</p>
                    <p><strong>Nom :</strong> {{ $reaction->nom }}</p>
                    <p><strong>Created_at :</strong> {{ $reaction->created_at }}</p>
                    <p><strong>Updated_at:</strong>{{$reaction->updated_at}}</p>
                    <a href="{{route('reactions.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('reactions.edit', $reaction->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection