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
                    <!--  foreach($users as $user)
                  <img
                    src="" asset('storage').'/'.$user->foto_perfil""
                    alt="user-avatar"
                    class="d-block rounded"
                    height="100"
                    width="100"
                    id="uploadedAvatar"
                  />
                  endforeach -->
                   
                  <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                      <span class="d-none d-sm-block"> Actualizar foto de perfil</span>
                      <i class="bx bx-upload d-block d-sm-none"></i>
                      <input
                        type="file"
                        id="upload"
                        class="account-file-input"
                        hidden
                        accept="image/png, image/jpeg"
                      />
                    </label>
                    <p class="text-muted mb-0">Permitido JPG, PNG. Tamaño máximo 800K</p>
                  </div>
                </div>
              </div>
              <hr class="my-0" />
              <!-- /Account -->
            </div>
          </div>
        </div>
      </div>
{{$plan -> id}}
{{$plan -> user -> nombre}} {{$plan -> user -> apellido_paterno}} {{$plan -> user -> apellido_materno}}
{!!$plan -> plan!!}
</x-layouts.master-layout>