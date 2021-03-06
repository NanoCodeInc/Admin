@extends('layouts.admin')
	@section('content')

		{!! Form::open(['url'=>'/clients.store', 'method'=>'POST']) !!}

		<div class="box-body">
				<div class="form-group">
					{!! Form::label('name','Nombre del Cliente') !!}
					{!! Form::text('clientname', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del nuevo Cliente']) !!}
				</div>
				<div class="form-group">
				  	{!! Form::label('work','Compañia') !!}
					{!! Form::text('work', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la compañia']) !!}
				</div>
				
			</div>



		{!! Form::close() !!}


	     <div class="col-md-12">
       @include('partials.alerts.success')
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
                  <h3 class="widget-user-username">{!! Auth::user()->name !!}</h3>
                  <h5 class="widget-user-desc">{!! Auth::user()->level->permission !!}</h5>
                </div>
                <div class="widget-user-image">
                  <img src="/images/{!! Auth::user()->file->path !!}" class="img-circle" alt="User Image">
                </div>
                <div class="box-footer">
                  <div class="row">
                    
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col -->

	@endsection