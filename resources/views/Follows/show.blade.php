@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails du Follow   {{ $follow->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $follow->id }}</p>
                    <p><strong>Follower_id :</strong> {{ $follow->follower_id }}</p>
                    <p><strong>Followed_id :</strong> {{ $follow->followed_id }}</p>
                    <p><strong>Created_at :</strong> {{ $follow->created_at }}</p>
                    <p><strong>Updated_at :</strong> {{ $follow->updated_at }}</p>
                    <a href="{{route('follows.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('follows.edit', $follow->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection