@extends('layouts.admin')	
	@section('content')
		<h1>Editar a {!!$client->name!!}</h1>
		{!!Form::model($client,['route'=>['clients.update',$client],'method'=>'PUT','files'=>true])!!}
			@include('client.form.client')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary button-striped btn-ripple button-full-striped'])!!}	
		{!!Form::close()!!}
@endsection