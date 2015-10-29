@extends('layouts.admin')	
	@section('content')
		<div class="col-xs-12">
			@include('partials.alerts.success')

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Servicios</h3>
					<div class="box-tools">
						<div class="input-group" style="width: 150px;">
							<input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
							<div class="input-group-btn">
								<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Archivo</th>
							<th>Acciones</th>
						</tr>
						@foreach($services as $service)
							<tr>
								<td>{!!$service->title!!}</td>
								<td>{!!$service->description!!}</td>
								<td>{!!$service->file_id!!}</td>
								<td>
			                        <div class="btn-group">
			                        	<button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
			                        	<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
			                        </div>
			                    </td>
							</tr>
						@endforeach
					</table>
				</div><!-- /.box-body -->
			</div>
		</div>
	@endsection