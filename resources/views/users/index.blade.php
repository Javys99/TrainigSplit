<x-layouts.master-layout title="Clientes">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
    
                <td>
                <img src="{{ asset('storage').'/'.$user->avatar }}" width="50" alt="">
                
                </td>
    
    
                <td>{{ $user->name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>
                
                <a href="{{ route('users.show', $user->id) }}">
                Info
                </a>
                
                | 
    
                <a href="{{ route('users.update', $user->id) }}" >
                Editar
                </a>
    
                |
                   
                <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
  