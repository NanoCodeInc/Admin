@extends('layouts.admin')	
	@section('content')
  
	<section class="content">
  @include('partials.alerts.errors')
      <div class="row">
        <div class="col-md-12">
        <div class="box box-primary box-body">
            <div class="box-header with-border">
                <i class="fa fa-fw fa-user-md"></i>
                <h3 class="box-title">Clientes</h3>
            {!!Form::open(['route'=>'clients.store','method'=>'POST','files'=>true])!!}
						@include('client.form.client')
						{!!Form::submit('Guardar',['class'=>'btn btn-primary button-striped btn-ripple button-full-striped'])!!}	
					  {!!Form::close()!!}
                

            </div>
        </div>
      </div>
      </div>
      </section>

		
	





		
	@endsection



	   