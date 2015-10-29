@extends('layouts.admin')
	@section('content')
		 <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Iniciar sesión</p>
	@include('partials.alerts.errors')
		
		{!! Form::open(['url'=>'/auth/login', 'method'=>'POST']) !!}
          <div class="form-group has-feedback">
          	{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Correo electronico']) !!}
          </div>
          <div class="form-group has-feedback">
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña']) !!}
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                	{!! Form::checkbox('remember') !!}
                Recordarme
              </div>
            </div>
            <div class="col-xs-12 col-md-12">
			{!! Form::submit('Iniciar', ['class'=>'btn btn-primary btn-block btn-flat']) !!}            
            </div>
          </div>
        {!! Form::close() !!}

        <a href="#">Olvide mi contraseña</a><br>
      </div>
    </div>
	@endsection