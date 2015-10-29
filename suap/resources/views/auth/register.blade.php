@extends('layouts.admin')
	@section('content')
	@include('partials.alerts.errors')
		<section class="content">
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Quick Example</h3>
						</div>
						{!! Form::open(['url'=>'/auth/register', 'method'=>'POST']) !!}
						<div class="box-body">
							<div class="form-group">
								{!! Form::label('name','Nombre:') !!}
								{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del nuevo usuario']) !!}
							</div>
							<div class="form-group">
							  	{!! Form::label('lastname','Apellidos:') !!}
								{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Ingresa los apellidos del nuevo usuario']) !!}
							</div>
							<div class="form-group">
							  	{!! Form::label('email','Correo electronico:') !!}
								{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo electronico del nuevo usuario']) !!}
							</div>
							
							<div class="form-group">
							  	{!! Form::label('password','Contraseña:') !!}
								{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña del nuevo usuario']) !!}
							</div>
							<div class="form-group">
							  	{!! Form::label('password_confirmation','Confirma la contraseña:') !!}
								{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña del nuevo usuario']) !!}
							</div>
						</div>

						<div class="box-footer">
							{!! Form::submit('Registrar usuario', ['class'=>'btn btn-primary']) !!}
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</section>
	@endsection