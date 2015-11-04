@extends('layouts.admin')
	@section('content')
		<section class="content" ng-app="Suap" ng-controller="CreateCtrl">
		@include('partials.alerts.errors')
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Quick Example</h3>
						</div>
						<form name="myForm" ng-submit="saveUser()">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" ng-model='User.token'>

						<div class="box-body">
							<div class="form-group">
								{!! Form::label('name','Nombre:') !!}
								{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del nuevo usuario','ng-model'=>'User.name','required']) !!}
							</div>


							<div class=""
				ng-show="myForm.name.$dirty && myForm.name.$invalid">
				<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i></label>
							<small class="error" 
             ng-show="myForm.name.$error.required">
             Your email is required.
      </small>
      </div>

							<div class="form-group">
							  	{!! Form::label('lastname','Apellidos:') !!}
								{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Ingresa los apellidos del nuevo usuario','ng-model'=>'User.lastname']) !!}
							</div>
							<div class="form-group">
							  	{!! Form::label('email','Correo electronico:') !!}
								{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo electronico del nuevo usuario','ng-model'=>'User.email']) !!}
							</div>
							
							<div class="form-group">
							  	{!! Form::label('password','Contraseña:') !!}
								{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña del nuevo usuario','ng-model'=>'User.password']) !!}
							</div>
							<div class="form-group">
							  	{!! Form::label('password_confirmation','Confirma la contraseña:') !!}
								{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña del nuevo usuario','ng-model'=>'User.password_confirmation']) !!}
							</div>
						</div>

						<div class="box-footer">
							{!! Form::submit('Registrar usuario', ['class'=>'btn btn-primary']) !!}
						</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	@endsection
	@section('scripts')
    {!! Html::script('js/Angular/controllers/usuarioctrl.js') !!}
  	@endsection