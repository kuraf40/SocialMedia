@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'un Follow</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('follows.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="follower_id" class="form-label"> Follower_id</label>
                    <input type="text" class="form-control" id="follower_id" name="follower_id" required>
                </div>

                <div class="col-md-6">
                    <label for="followed_id" class="form-label">Followed_id</label>
                    <input type="text" class="form-control" id="followed_id" name="followed_id" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('follows.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection