@extends('layouts.admin')	
	@section('content')
	<div class="content">
	<div class="row">
        <div class="col-md-12">
        <div class="box box-primary box-body">
            <div class="box-header with-border">
                <i class="fa fa-fw fa-user-md"></i>
		<h1>Editar a {!!$client->name!!}</h1>
		{!!Form::model($client,['route'=>['clients.update',$client],'method'=>'PUT','files'=>true])!!}
			@include('client.form.client')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary button-striped btn-ripple button-full-striped'])!!}	
		{!!Form::close()!!}
			</div>
		</div>
		</div>
		</div>
		</div>

@endsection