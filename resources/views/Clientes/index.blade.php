
Mostrar listas de clientes
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Correo Electronico</th>
            <th>Tipo de Poliza</th>
            <th>Fecha de vigencia</th>
            <th>Compañia de seguros</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $clientes)
        <tr>
            <td>{{$clientes->id}}</td>
            <td>{{$clientes->Nombre}}</td>
            <td>{{$clientes->Apellido}}</td>
            <td>{{$clientes->Cedula}}</td>
            <td>{{$clientes->Correo_electronico}}</td>
            <td>{{$clientes->Tipo_poliza}}</td>
            <td>{{$clientes->Fecha_vigencia}}</td>
            <td>{{$clientes->Compañia}}</td>
            <td>
            
            <a href="{{ url('/clientes/'.$clientes->id.'/edit') }}">
            
            Editar
            
            <a>

             | 

            <form action="{{ url('/clientes/'.$clientes->id ) }}" method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

            </form>


            </td>
        </tr>
        @endforeach
    </tbody>

</table>
