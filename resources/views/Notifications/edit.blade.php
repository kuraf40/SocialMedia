@extends('backlayout2')
@section('content')
<div class="container ">
    <h4 class="text-center">Modifier les informations utilisateur</h4>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('langues.update', $notifications->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row md-3">

            <div class="col-md-6">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $notifications->type }}" required>
            </div>

            <div class="col-md-6">
                <label for="data" class="form-label">Data</label>
                <input type="text" class="form-control" id="data" name="data" value="{{ $notifications->data }}" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="read_at" class="form-label">Read At</label>
                <input type="text" class="form-control" id="read_at" name="read_at" value="{{ $notifications->read_at }}" required>
            </div>

            <div class="col-md-6">
                <label for="user_id" class="form-label">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $notifications->user_id }}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-warning float-end">Mettre à jour</button>
    </form>
    <a href="{{route('notifications.index')}}" class="btn btn-primary">Retour</a>
        </div>
            

    </div>
</div>
@endsection