@extends('backlayout2')
@section('content')

<div class="container  ">
  <table id="comment_reactionsTable"  class="table table-hover table table-bordered">
    <div>
      <h4 class="text-center mb-4">Liste </h4>
    </div>

    <div class="mb-3">
      <a href="{{ route('comment_reactions.create') }}" class="btn btn-primary btn-sm float-end"><i class="bi bi-plus"></i> Ajouter</a>
    </div>
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User_id</th>
      <th scope="col">Comment_id</th>
      <th scope="col">Reaction_id</th>
      <th scope="col"  class="text-center">Actions</th>
    </tr>
  </thead>  
  <tbody>
    @foreach ($comment_reactions as $comment_reaction)
    <tr>
      <th>{{$comment_reaction->id}}</th>
      <th>{{$comment_reaction->user_id}}</th>
      <th>{{$comment_reaction->comment_id}}</th>
      <th>{{$comment_reaction->reaction_id}}</th>
      <th class="text-center">
        <a href="{{ route('comment_reactions.show', $comment_reaction->id) }}" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-eye"></i></a>
        <a href="{{ route('comment_reactions.edit', $comment_reaction->id) }}" class="btn btn-outline-warning btn-sm me-2"><i class="bi bi-pencil"></i></a>
        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteCommentReactionModal{{ $comment_reaction->id }}">
          <i class="bi bi-trash"></i>
        </button>

        <div class="modal fade" id="deleteCommentReactionModal{{ $comment_reaction->id }}" tabindex="-1" aria-labelledby="deleteCommentReactionModalLabel{{ $comment_reaction->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="deleteCommentReactionModalLabel{{ $comment_reaction->id }}">Confirmation de suppression</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer le comment_reaction {{ $comment_reaction->user_id }} {{ $comment_reaction->comment_id }} {{ $comment_reaction->reaction_id }} ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm float-start" data-bs-dismiss="modal">Annuler</button>
                <form action="{{ route('comment_reactions.destroy', $comment_reaction->id) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm float-end">Supprimer</button>
                </form>
              </div>
            </div>
          </div>

        </div>
       
      </th>
    </tr>
        
    @endforeach
  </tbody>
 
</table>
</div>

<script>
  $(document).ready(function(){
    $('#comment_reactionsTable').DataTable({
      "pageLength": 10,
      "lengthMenu":[5, 10, 20, 50, 100],
      "language":{
        "search":"Rechercher :",
        "lengthMenu": "Affichage _MENU_ lignes",
        "info": "Affichage de _START_ à _END_ sur _TOTAL_ entrées",
        "paginate": {
          "first": "Premier",
          "last": "Dernier",
          "next": "Suivant",
          "previous": "Précédent" 
        }
      }
    })
  })
</script>
@endsection





