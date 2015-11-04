@extends('layouts.admin')
	@section('content')
	       <div class="col-md-6">
              <!-- Custom Tabs (Pulled to the right) -->
              @include('partials.alerts.errors')
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-info"></i></a></li>
                  <li><a href="#tab_2-2" data-toggle="tab"><i class="fa fa-lock"></i></a></li>
                  <li class="pull-left header"><i class="fa fa-pencil-square-o"></i> Tu información personal</li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">

                  	{!! Form::model($user, ['route'=>['usuarios.update',$user], 'method'=>'PUT', 'files'=>true]) !!}
                  	{!! Form::model($user, ['route'=>['usuarios.update',$user], 'method'=>'PUT', 'files' => true]) !!}
                  	{!! Form::model($user, ['route'=>['usuarios.update',$user], 'method'=>'PUT', 'files' => true]) !!}
<<<<<<< HEAD
	                  	<div class="form-group">
=======


	                  	<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
	                  	{!! $errors->first('name','<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i></label>') !!}
	                  	
>>>>>>> b6f536da86df9048f9169e208d68ea7161392c35
							{!! Form::label('name','Nombre:') !!}
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del nuevo usuario']) !!}
							 
						</div>
						<div class="form-group {!! $errors->has('lastname') ? 'has-error' : '' !!}">
						{!! $errors->first('lastname','<label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i></label>') !!}
						  	{!! Form::label('lastname','Apellidos:') !!}
							{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Ingresa los apellidos del nuevo usuario']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('email','Correo electronico:') !!}
							{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el correo electronico del nuevo usuario', 'disabled']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('avatar','Avatar:') !!}
							{!! Form::file('file_id') !!}
						</div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2-2">
                    <div class="form-group">
						{!! Form::label('password','Contraseña:') !!}
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa una nueva contraseña']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password_confirmation','Contraseña:') !!}
						{!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirma la contraseña']) !!}
					</div>

				</div><!-- /.tab-pane -->
                  {!! Form::submit('Actualizar información',['class'=>'btn btn-primary']) !!}
					{!! Form::close() !!}
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
	@endsection