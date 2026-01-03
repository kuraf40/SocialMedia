@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails de la notification   {{ $notification->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $notification->id }}</p>
                    <p><strong>Type :</strong> {{ $notification->type }}</p>
                    <p><strong>Data :</strong> {{ $notification->data }}</p>
                    <p><strong>Read_at :</strong> {{ $notification->read_at }}</p>
                    <p><strong>User_id :</strong> {{ $notification->user_id }}</p>
                    <a href="{{route('notifications.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('notifications.edit', $notification->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection