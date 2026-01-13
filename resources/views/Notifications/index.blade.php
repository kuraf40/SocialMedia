@extends('backlayout2')


@section('content')

<div class="container  ">
  <table id="notificationsTable"  class="table table-hover table table-bordered">
    <div>
      <h4 class="text-center mb-4">Notifications</h4>
    </div>

    <div class="mb-3">
      <a href="{{ route('notifications.create') }}" class="btn btn-primary btn-sm float-end"><i class="bi bi-plus"></i> Ajouter</a>
    </div>
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Data</th>
      <th scope="col"  class="text-center">Actions</th>
    </tr>
  </thead>  
  <tbody>
    @foreach ($notifications as $notification)
    <tr>
      <th>{{$notification->id}}</th>
      <th>{{$notification->type}}</th>
      <th>{{Str::limit($notification->data, 70)}}</th>
      <th class="text-center">
        <a href="{{ route('notifications.show', $notification->id) }}" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-eye"></i></a>
        <a href="{{ route('notifications.edit', $notification->id) }}" class="btn btn-outline-warning btn-sm me-2"><i class="bi bi-pencil"></i></a>
        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteNotificationModal{{ $notification->id }}">
          <i class="bi bi-trash"></i>
        </button>

        <div class="modal fade" id="deleteNotificationModal{{ $notification->id }}" tabindex="-1" aria-labelledby="deleteNotificationModalLabel{{ $notification->id }}" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="deleteLangueModalLabel{{ $langue->id }}">Confirmation de suppression</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer la notification {{ Str::limit($notification->data, 20) }} ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm float-start" data-bs-dismiss="modal">Annuler</button>
                <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST" style="display: inline;">
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
    $('#notificationsTable').DataTable({
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