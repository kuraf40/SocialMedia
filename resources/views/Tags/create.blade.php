@extends('backlayout2')
@section('content')
<h4 class="text-center"><strong>Création d'un Tag</strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('tags.store') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>
            </div>


            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('tags.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection