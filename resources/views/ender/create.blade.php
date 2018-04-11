<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{{ Form::open(['route' => 'ender.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id'=>'form-create'
		]) }}
									<div class="form-group">
											{!! Form::label('Cédula', 'Cédula') !!}
											{!! Form::text('cedula', null, ['class' => 'form-control' , 'required' => 'required']) !!}
									</div>
                	<div class="form-group">
                      {!! Form::label('Nombre', 'Nombre') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
									<div class="form-group">
                      {!! Form::label('Apellido', 'Apellido') !!}
                      {!! Form::text('apellido', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
									<div class="form-group">
                      {!! Form::label('Edad', 'Edad') !!}
                      {!! Form::text('edad', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
                <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
