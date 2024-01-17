<x-layouts.master-layout title="Clientes">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action=" {{ route('users.update', $user->id) }} " method="post" enctype="multipart/form-data">
        @method('put')
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <label for="nombre"> Nombre </label>
    <input type="text" name="nombre" value="{{ $user->nombre }}" id="nombre">
    <br>
    
    <label for="apellido_paterno"> Apellido Paterno </label>
    <input type="text" name="apellido_paterno" value="{{ $user->apellido_paterno }}" id="apellido_paterno">
    <br>
    
    <label for="apellido_materno"> Apellido Materno </label>
    <input type="text" name="apellido_materno" value="{{ $user->apellido_materno }}" id="apellido_materno">
    <br>
    
    <label for="correo"> Correo </label>
    <input type="text" name="correo" value="{{ $user->correo }}" id="correo">
    <br>
    
    <label for="foto_perfil">Foto</label>
    @if($user->foto_perfil)
    <img src="{{ asset('storage').'/'.$user->foto_perfil }}" width="200" alt="">
    @endif
    <br>
    <input type="file" name="foto_perfil" id="foto_perfil">
    <br>
    <input type="submit" value="Guardar" id="guardar">
    </form>
    </body>
    </html>
</x-layouts.master-layout>

