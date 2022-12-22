
<h1>{{$modo}} Cliente</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach( $errors->all() as $error )
        <li>{{$error}}</li>
    @endforeach

    </ul>
    </div>

  

@endif



    <div class="form-group">
    <label for="Nombre"><b>Nombre</b></label>
        <input type="text" class="form-control" name="Nombre" value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre')}}" id="Nombre">
        <br>
    </div>

    <div class="form-group">
    <label for="Apellido"><b>Apellido</b></label>
    <input type="text" class="form-control" name="Apellido" value="{{ isset($cliente->Apellido)?$cliente->Apellido:old('Apellido') }}"  id="Apellido">
    <br>
    </div>

    <div class="form-group">
    <label for="Cedula">Cedula de identidad</label>
    <input type="text" class="form-control" name="Cedula" value="{{ isset($cliente->Cedula)?$cliente->Cedula:old('Cedula')}}"  id="Cedula">
    <br>
    </div>

    <div class="form-group">
    <label for="Correo">Correo electronico de contacto</label>
    <input type="text" class="form-control" name="Correo_electronico" value="{{ isset($cliente->Correo_electronico)? $cliente->Correo_electronico:old('Correo_electronico')}}" id="Correo_electronico">
    <br>
    </div>

    <div class="form-group">
    <label for="Tipo_poliza">Tipo de poliza del cliente</label>
    <input type="text" class="form-control" name="Tipo_poliza" value="{{ isset($cliente->Tipo_poliza)? $cliente->Tipo_poliza:old('Tipo_poliza')}}" id="Tipo_poliza">
    <br>
    </div>

    <div class="form-group">
    <label for="Fecha_vigencia">La fecha de vigencia</label>
    <input type="text" class="form-control" name="Fecha_vigencia" value="{{ isset($cliente->Fecha_vigencia)? $cliente->Fecha_vigencia:old('Fecha_vigencia') }}" id="Fecha_vigencia">
    <br>
    </div>

    <div class="form-group">
    <label for="Compañia">Compañia de seguros</label>
    <input type="text" class="form-control" name="Compañia" value="{{ isset($cliente-> Compañia)? $cliente-> Compañia:old('Compañia') }}" id= "Compañia">
    <br>
    </div>

    <input class="btn btn-success" type="Submit" value="{{ $modo }} datos">
    <a class="btn btn-primary" href="{{ url('clientes/') }}">Regresar</a>