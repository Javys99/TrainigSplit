<form method="post" action="{{ url('/cliente') }}" enctype="multipart/form-data">
    @csrf
    @include('cliente.form',['modo'=>'Crear'])
</form>
