@extends('layouts.admin')	
	@section('content')
	<section class="content">
			
			<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Empresa <small>Cual es el nombre?</small></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body pad">
                {!! Form::open() !!}

                    {!! Form::text('area',null , ['placeholder' => 'Ingresa el nombre de tu empresa', 'style' => 'width: 100%; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
					</br></br>
                    {!! Form::submit('Guardar mision',['class'=>'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
                </div>
              </div>

		    <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Misión <small>A donde vamos?</small></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body pad">
                {!! Form::open() !!}

                    {!! Form::textarea('area',null , ['placeholder' => 'Ingresa tu mision', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}

                    {!! Form::submit('Guardar mision',['class'=>'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
                </div>
              </div>


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Visión <small>Que queremos?</small></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimizar"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class="box-body pad">
                  {!! Form::open() !!}
					{!! Form::textarea('area',null , ['placeholder' => 'Ingresa tu vision', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;']) !!}
                    {!! Form::submit('Guardar vision',['class'=>'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
                </div>
              </div>
	</section>
	@endsection