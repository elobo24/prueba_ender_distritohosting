@extends ('backend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
          <div class="form-group">
            <label for="exampleInputName2">Name</label>
            <input type="text" class="form-control" name = "name" >
          </div>
          <button type="submit" class="btn btn-default">Search</button>

        {!! Form::close() !!}
        <br>
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>
                    <td>{{ $dato->nombre }}</td>
                    <td>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
</div>
@endsection
