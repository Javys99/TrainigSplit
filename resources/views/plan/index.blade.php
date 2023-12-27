<x-layouts.master-layout title="Plan">
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
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
    
                <td>
                <img src="{{ asset('storage').'/'.$cliente->foto_perfil }}" width="50" alt="">
                
                </td>
    
    
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->apellido_paterno }}</td>
                <td>{{ $cliente->apellido_materno }}</td>
                <td>{{ $cliente->correo }}</td>
                <td>
                
                <a href="{{ url('/cliente/'.$cliente->id.'/info') }}">
                Info
                </a>
                
                | 
    
                <a href="{{ url('/cliente/'.$cliente->id.'/edit' ) }}" >
                Editar
                </a>
    
                |
                   
                <form action="{{ url('/cliente/'.$cliente->id ) }}" method="post">
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
  