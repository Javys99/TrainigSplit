<x-layouts.master-layout title="Plan">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Plan</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plans as $plan)
            <tr>
                <td>{{ $plan->id }}</td>
                <td>{{ $plan->user->nombre }}</td>
                <td>{!! $plan->plan !!}</td>
                <td>
                    <a href="{{ url('/plan/'.$plan->id.'/edit' ) }}" >
                        Editar
                    </a>
                    |
                    <form action="{{ url('/plan/'.$plan->id ) }}" method="post">
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
  