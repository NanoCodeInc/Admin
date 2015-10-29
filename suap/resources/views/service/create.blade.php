@extends('layouts.admin')
	@section('content')
		<section class="content">
			@include('partials.alerts.errors')
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Crear Servicio</h3>
								{!!Form::open(['route'=>'services.store','method'=>'POST','files'=>true])!!}
									@include('service.form.service')
									<div class="box-footer">
										{!! Form::submit('Crear', ['class'=>'btn btn-primary']) !!}
									</div>
								{!!Form::close()!!}
						</div>
					</div>
				</div>
			</div>
		</section>
	@endsection