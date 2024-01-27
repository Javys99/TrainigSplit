<x-layouts.master-layout title="HOLA  {{ auth()->user()->name }}" description="MUY BIEN Y TU?">

    <center>
        {{-- logout btn --}}
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Cerrar sesión</button>
        </form>
    </center>

</x-layouts.master-layout>
