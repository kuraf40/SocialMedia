@extends('backlayout2')
@section('content')

<div class="container  ">
  <table id="post_reactionsTable"  class="table table-hover table table-bordered">
    <div>
      <h4 class="text-center mb-4">Liste </h4>
    </div>

    <div class="mb-3">
      <a href="{{ route('post_reactions.create') }}" class="btn btn-primary btn-sm float-end"><i class="bi bi-plus"></i> Ajouter</a>
    </div>
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User_id</th>
      <th scope="col">Post_id</th>
      <th scope="col">Reaction_id</th>
      <th scope="col"  class="text-center">Actions</th>
    </tr>
  </thead>  
  <tbody>
    @foreach ($post_reactions as $post_reaction)
    <tr>
      <th>{{$post_reaction->id}}</th>
      <th>{{$post_reaction->user_id}}</th>
      <th>{{$post_reaction->post_id}}</th>
      <th>{{$post_reaction->reaction_id}}</th>
      <th class="text-center">
        <a href="{{ route('post_reactions.show', $post_reaction->id) }}" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-eye"></i></a>
        <a href="{{ route('post_reactions.edit', $post_reaction->id) }}" class="btn btn-outline-warning btn-sm me-2"><i class="bi bi-pencil"></i></a>
        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePostReactionModal{{ $post_reaction->id }}">
          <i class="bi bi-trash"></i>
        </button>

        <div class="modal fade" id="deletePostReactionModal{{ $post_reaction->id }}" tabindex="-1" aria-labelledby="deletePostReactionModalLabel{{ $post_reaction->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="deletePostReactionModalLabel{{ $post_reaction->id }}">Confirmation de suppression</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer le post_reaction {{ $post_reaction->user_id }} {{ $post_reaction->post_id }} {{ $post_reaction->reaction_id }} ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm float-start" data-bs-dismiss="modal">Annuler</button>
                <form action="{{ route('post_reactions.destroy', $post_reaction->id) }}" method="POST" style="display: inline;">
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
    $('#post_reactionsTable').DataTable({
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





