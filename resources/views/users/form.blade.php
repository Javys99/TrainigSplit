<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=" {{ url('/users/form') }} " method="post" enctype="multipart/form-data">
@csrf

<label for="nombre"> Nombre </label>
<input type="text" name="nombre" value="{{ isset($cliente->nombre)?$cliente->nombre:old('nombre') }}" id="nombre">
<br>

<label for="apellido_paterno"> Apellido Paterno </label>
<input type="text" name="apellido_paterno" value="{{ isset($cliente->apellido_paterno)?$cliente->apellido_paterno:old('apellido_paterno') }}" id="apellido_paterno">
<br>

<label for="apellido_materno"> Apellido Materno </label>
<input type="text" name="apellido_materno" value="{{ isset($cliente->apellido_materno)?$cliente->apellido_materno:old('apellido_materno') }}" id="apellido_materno">
<br>

<label for="correo"> Correo </label>
<input type="text" name="correo" value="{{ isset($cliente->correo)?$cliente->correo:old('correo') }}" id="correo">
<br>

<label for="foto_perfil">Foto</label>
@if(isset($cliente->foto_perfil))
<img src="{{ asset('storage').'/'.$cliente->foto_perfil }}" width="200" alt="">
@endif
<input type="file" name="foto_perfil" id="foto_perfil">
<br>
<input type="submit" value="Guardar" id="guardar">
</form>
</body>
</html>