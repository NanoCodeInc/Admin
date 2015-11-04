@extends('layouts.admin')
	@section('content')
		<section class="content">
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title"><i class="fa fa-pencil"></i> Editar Marca</h3>
								{!!Form::model($brand, ['route'=>['brands.update',$brand],'method'=>'PUT','files'=>true])!!}
									@include('brand.form.brand')
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