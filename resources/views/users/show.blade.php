<x-layouts.master-layout title="Informacion del Usuario">    
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
              <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Cuenta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-account-settings-notifications.html"
                  ><i class="bx bx-bell me-1"></i> Notificaciones</a
                >
              </li>
              
            </ul>
            <div class="card mb-4">
              <h5 class="card-header">Detalles del Perfil</h5>
              <!-- Account -->
              <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                  <img
                    src="{{ asset('storage').'/'.$user -> user ->profile_picture }} "
                    alt="user-avatar"
                    class="d-block rounded"
                    height="100"
                    width="100"
                    id="uploadedAvatar"
                  /> 
                  <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">Numero de ID: {{$user -> user -> id}}</label>
                    <br>
                    <label for="firstName" class="form-label">{{$user -> user -> name}} {{$user -> user -> last_name}} {{$user -> user -> middle_name}}</label>
                  </div>
                </div>
              </div>
              <hr class="my-0" />
              <div class="card-body">
    
              </div>
              <!-- /Account -->
            </div>
          </div>
        </div>
      </div>
    
</x-layouts.master-layout>