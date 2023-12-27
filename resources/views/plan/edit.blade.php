<form action="{{ url('/plan/'.$plan->id ) }}" method="post" enctype="multipart/form-data" >
@csrf
{{ method_field('PATCH') }}
@include('plan.form',['modo'=>'Editar'])
</form>
