@extends('layouts.admin')
	@section('content')
		<section class="content">
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title"><i class="fa fa-pencil"></i> Editar Servicio</h3>
								{!!Form::model($service, ['route'=>['services.update',$service],'method'=>'PUT','files'=>true])!!}
									@include('service.form.service')
									<div class="box-footer">
										{!! Form::submit('Actualizar', ['class'=>'btn btn-primary']) !!}
									</div>
								{!!Form::close()!!}
						</div>
					</div>
				</div>
			</div>
		</section>
	@endsection