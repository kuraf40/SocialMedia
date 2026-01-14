@extends('backlayout2')


@section('content')

<div class="container  ">
  <table id="type_mediasTable"  class="table table-hover table table-bordered">
    <div>
      <h4 class="text-center mb-4">Liste des Type de Medias</h4>
    </div>

    <div class="mb-3">
      <a href="{{ route('type_medias.create') }}" class="btn btn-primary btn-sm float-end"><i class="bi bi-plus"></i> Ajouter</a>
    </div>
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col"  class="text-center">Actions</th>
    </tr>
  </thead>  
  <tbody>
    @foreach ($type_medias as $type_media)
    <tr>
      <th>{{$type_media->id}}</th>
      <th>{{$type_media->nom}}</th>
      <th class="text-center">
        <a href="{{ route('type_medias.show', $type_media->id) }}" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-eye"></i></a>
        <a href="{{ route('type_medias.edit', $type_media->id) }}" class="btn btn-outline-warning btn-sm me-2"><i class="bi bi-pencil"></i></a>
        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteTypeMediaModal{{ $type_media->id }}">
          <i class="bi bi-trash"></i>
        </button>

        <div class="modal fade" id="deleteTypeMediaModal{{ $type_media->id }}" tabindex="-1" aria-labelledby="deleteTypeMediaModalLabel{{ $type_media->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="deleteTypeMediaModalLabel{{ $type_media->id }}">Confirmation de suppression</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer cette donnee ? {{ $type_media->nom }} ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm float-start" data-bs-dismiss="modal">Annuler</button>
                <form action="{{ route('type_medias.destroy', $type_media->id) }}" method="POST" style="display: inline;">
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
    $('#type_mediasTable').DataTable({
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

