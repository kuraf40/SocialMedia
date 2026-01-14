@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier le Commentaire</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('follows.update', $follow->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="follower_id" class="form-label">Follower_id</label>
                <input type="text" class="form-control" id="follower_id" name="follower_id" value="{{ $follow->follower_id }}" required>
            </div>

            <div class="col-md-6">
                <label for="followed_id" class="form-label">Followed_id</label>
                <input type="text" class="form-control" id="followed_id" name="followed_id" value="{{ $follow->followed_id }}" required>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('follows.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection