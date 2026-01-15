@extends('backlayout2')

@section('content')
<h4 class="text-center"><strong>Création </strong></h4>
<div class="card">
    <div class="card-body">
        <form action="{{ route('post_reactions.store') }}" method="POST">
            @csrf

             <div class="row mb-3">
                <div class="md-6">
                    <label for="user_id" class="form-label"> User_id</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" required>
                </div>
            </div>

            

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="post_id" class="form-label"> Post_id</label>
                    <input type="text" class="form-control" id="post_id" name="post_id" required>
                </div>

                <div class="col-md-6">
                    <label for="reaction_id" class="form-label">Reaction_id</label>
                    <input type="text" class="form-control" id="reaction_id" name="reaction_id" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success float-end">Créer</button>
        </form>
        <a href="{{route('post_reactions.index')}}" class="btn btn-primary">Retour</a>
    </div>
@endsection