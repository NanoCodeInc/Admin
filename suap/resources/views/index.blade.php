@extends('layouts.admin')
	@section('content')

		{!! Form::open(['url'=>'/clients.store', 'method'=>'POST']) !!}

		<div class="box-body">
				<div class="form-group">
					{!! Form::label('name','Nombre del Cliente') !!}
					{!! Form::text('clientname', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del nuevo Cliente']) !!}
				</div>
				<div class="form-group">
				  	{!! Form::label('work','Compañia') !!}
					{!! Form::text('work', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la compañia']) !!}
				</div>
				
			</div>



		{!! Form::close() !!}


	@endsection