<x-layouts.master-layout title="Clientes">
    <div class="d-flex justify-content-end " style="margin-right:1em;">
        <a href="{{ route('cliente.create') }}" class="btn btn-success">Agregar Cliente</a>
    </div>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
    
                <td>
                <img src="{{ asset('storage').'/'.$user->foto_perfil }}" width="50" alt="">
                
                </td>
    
    
                <td>{{ $user->nombre }}</td>
                <td>{{ $user->apellido_paterno }}</td>
                <td>{{ $user->apellido_materno }}</td>
                <td>{{ $user->correo }}</td>
                <td>
                
                <a href="{{ url('/cliente/'.$user->id.'/info') }}">
                Info
                </a>
                
                | 
    
                <a href="{{ url('/cliente/'.$user->id.'/edit' ) }}" >
                Editar
                </a>
    
                |
                   
                <form action="{{ url('/cliente/'.$user->id ) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm ('¿Quieres borrar?')" value="Borrar">
    
                </form>
            
            </td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</x-layouts.master-layout>
  