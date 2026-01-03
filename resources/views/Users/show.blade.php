@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails de l'utilisateur   {{ $user->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $user->id }}</p>
                    <p><strong>Nom :</strong> {{ $user->nom }}</p>
                    <p><strong>Prénom :</strong> {{ $user->prenom }}</p>
                    <p><strong>Email :</strong> {{ $user->email }}</p>
                    <p><strong>Password :</strong> {{ $user->password }}</p>
                    <p><strong>Username :</strong> {{ $user->username }}</p>
                    <p><strong>Role :</strong> {{ $user->role }}</p>
                    <p><strong>Inscription :</strong> {{ $user->date_inscription }}</p>
                    <p><strong>Naissance :</strong> {{ $user->date_naissance }}</p>
                    <a href="{{route('users.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection