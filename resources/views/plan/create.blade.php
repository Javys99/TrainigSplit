<x-layouts.master-layout title="Plan">
    <form method="post" action="{{ url('/plan') }}" enctype="multipart/form-data">
        @csrf
        @include('plan.form',['modo'=>'Crear'])
    </form>
    
</x-layouts.master-layout>
