@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails de la langue   {{ $langue->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $langue->id }}</p>
                    <p><strong>Code :</strong> {{ $langue->code }}</p>
                    <p><strong>Nom :</strong> {{ $langue->nom }}</p>
                    <p><strong>Local :</strong> {{ $langue->locale}}</p>
                    <p><strong>Direction :</strong> {{ $langue->direction }}</p>
                    <a href="{{route('langues.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('langues.edit', $langue->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection