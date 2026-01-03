@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier les informations utilisateur</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row md-3">

            <div class="col-md-6">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}" required>
            </div>

            <div class="col-md-6">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}" required>
            </div>
        </div>




        <div class="row mb-3">
            <div class="col-md-6">
                <label for="username" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
            </div>
            <div class="col-md-6">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ $user->role }}" required>
            </div>
        </div>

       
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="date_naissance" class="form-label">Date de naissance</label>
                <input type="text" class="form-control" id="date_naissance" name="date_naissance" value="{{ $user->date_naissance }}" required>
            </div>
            <div class="col-md-6">
                <label for="date_inscription" class="form-label">Date d'inscription</label>
                <input type="text" class="form-control" id="date_inscription" name="date_inscription" value="{{ $user->date_inscription }}" required>
            </div>
        </div>


        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('users.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection