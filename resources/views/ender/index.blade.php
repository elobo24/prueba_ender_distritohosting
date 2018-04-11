
<div class="container">
    <div class="row">
        <a title="Registrar Contacto" class="btn btn-sm btn-success" href="{{route('ender.create')}}"><i class="fa fa-plus"></i> Crear</a>
        {!! Form::close() !!}
        <br>
		<table align= 'center' border = '6'>
            <thead>
                <tr>
                  <th>Cedula</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Edad</th>
                  <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>
                    <td>{{ $dato->cedula }}</td>
                    <td>{{ $dato->nombre }}</td>
                    <td>{{ $dato->apellido }}</td>
                    <td>{{ $dato->edad }}</td>
                    <td>
                      <center>
                          <a class="btn btn-primary btn-xs" href="{{ route('ender.edit',['id' => $dato->id] )}}" >Edit</a>
                          <a class="btn btn-danger btn-xs" href="{{ route('ender/destroy',['id' => $dato->id] )}}" >Delete</a>
                      </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
