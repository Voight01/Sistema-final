@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/clientes/'.$cliente->id ) }}" method="post">
@csrf 
{{ method_field('PATCH') }}

@include('Clientes.form',['modo'=>'Editar']);

</form>
</div>
@endsection



