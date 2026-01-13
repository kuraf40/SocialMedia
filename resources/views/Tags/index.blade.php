@extends('backlayout2')@extends('backlayout2')


@section('content')

<div class="container  ">
  <table id="tagsTable"  class="table table-hover table table-bordered">
    <div>
      <h4 class="text-center mb-4">Liste des Tags</h4>
    </div>

    <div class="mb-3">
      <a href="{{ route('tags.create') }}" class="btn btn-primary btn-sm float-end"><i class="bi bi-plus"></i> Ajouter</a>
    </div>
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col"  class="text-center">Actions</th>
    </tr>
  </thead>  
  <tbody>
    @foreach ($tags as $tag)
    <tr>
      <th>{{$tag->id}}</th>
      <th>{{$tag->nom}}</th>
      <th class="text-center">
        <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-eye"></i></a>
        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-outline-warning btn-sm me-2"><i class="bi bi-pencil"></i></a>
        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteTagModal{{ $tag->id }}">
          <i class="bi bi-trash"></i>
        </button>

        <div class="modal fade" id="deleteTagModal{{ $tag->id }}" tabindex="-1" aria-labelledby="deleteTagModalLabel{{ $tag->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="deleteTagModalLabel{{ $tag->id }}">Confirmation de suppression</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer le tag {{ $tag->nom }} ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm float-start" data-bs-dismiss="modal">Annuler</button>
                <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display: inline;">
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
    $('#tagsTable').DataTable({
        retrieve: true,
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





