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
                <td ><a class="font-weight-bold" href="{{ route('plan.show',$plan->id) }}"> {{ $plan->id }} </a> </td> 
                <td>{{ $plan->user->nombre }}</td>
                <td><?php
                    $planText = strip_tags($plan->plan); // Eliminar etiquetas HTML si las hay
                    $words = explode(' ', $planText); // Dividir el texto en palabras
                    $first20Words = implode(' ', array_slice($words, 0, 20)); // Tomar las primeras 20 palabras
                    echo $first20Words;
                ?></td>
                <td>
                   
                    <a href="{{ route('plan.edit', $plan->id) }}" >
                        Editar
                    </a>
                    |
                    <form action="{{ route('plan.destroy', $plan->id) }}" method="post">
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
  