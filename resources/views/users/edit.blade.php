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
    <label for="name"> Nombre </label>
    <input type="text" name="name" value="{{ $user->name }}" id="name">
    <br>
    
    <label for="last_name"> Apellido Paterno </label>
    <input type="text" name="last_name" value="{{ $user->last_name }}" id="last_name">
    <br>
    
    <label for="middle_name"> Apellido Materno </label>
    <input type="text" name="middle_name" value="{{ $user->middle_name }}" id="middle_name">
    <br>
    
    <label for="email"> Correo </label>
    <input type="text" name="email" value="{{ $user->email }}" id="correo">
    <br>
    
    <label for="profile_picture">Foto</label>
    @if($user->profile_picture)
    <img src="{{ asset('storage').'/'.$user->profile_picture }}" width="200" alt="">
    @endif
    <br>
    <input type="file" name="profile_picture" id="profile_picture">
    <br>
    <input type="submit" value="Guardar" id="guardar">
    </form>
    </body>
    </html>
</x-layouts.master-layout>

