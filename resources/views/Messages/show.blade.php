@extends('backlayout2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><strong>Détails du Message   {{ $message->id }}</strong></div>

                <div class="card-body">
                    <p><strong>ID :</strong> {{ $message->id }}</p>
                    <p><strong>Sender_id :</strong> {{ $message->sender_id }}</p>
                    <p><strong>Receiver_id :</strong> {{ $message->receiver_id }}</p>
                    <p><strong>Contenu :</strong> {{ Str::limit($message->contenu, 60) }}</p>
                    <p><strong>Created_at :</strong> {{ $message->created_at }}</p>
                    <p><strong>Read_at :</strong> {{ $message->read_at }}</p>
                    <p><strong>Updated_at :</strong> {{ $message->updated_at }}</p>
                    <a href="{{route('messages.index')}}" class="btn btn-primary ">Retour</a>
                    <a href="{{route('messages.edit', $message->id)}}" class="btn btn-outline-warning float-end">Modifier </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection