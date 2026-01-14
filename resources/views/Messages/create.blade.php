@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'un Message</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('messages.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="sender_id" class="form-label">Sender_id</label>
                    <input type="text" class="form-control" id="sender_id" name="sender_id" required>
                </div>

                <div class="col-md-6">
                    <label for="receiver_id" class="form-label">Receiver_id</label>
                    <input type="text" class="form-control" id="receiver_id" name="receiver_id" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="read_at" class="form-label">Read_at</label>
                    <input type="text" class="form-control" id="read_at" name="read_at" >
                </div>

                <div class="col-md-6">
                    <label for="contenu" class="form-label">Contenu</label>
                    <input type="text" class="form-control" id="contenu" name="contenu" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('messages.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection