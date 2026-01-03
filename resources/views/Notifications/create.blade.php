@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'une Notifications</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('notifications.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" required>
                </div>

                <div class="col-md-6">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="contenu" class="form-label">Contenu</label>
                    <input type="text" class="form-control" id="contenu" name="contenu" required>
                </div>

                <div class="col-md-6">
                    <label for="lien" class="form-label">Lien</label>
                    <input type="text" class="form-control" id="lien" name="lien" >
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="read_at" class="form-label">Read At</label>
                    <input type="datetime-local" class="form-control" id="read_at" name="read_at" required>
                </div>

                <div class="col-md-6">
                    <label for="user_id" class="form-label">User ID</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('notifications.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection