@extends('layouts.admin')
	@section('content')
  <div class="col-xs-12">
  @include('partials.alerts.success')
  
  <div class="box">
		                <div class="box-header">
                  <h3 class="box-title">Responsive Hover Table</h3>
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
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Nivel</th>
                      <th>Acciones</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                      <td>{!! $user->id !!}</td>
                      <td>{!! $user->name !!}</td>
                      <td>{!! $user->email !!}</td>
                      <td><span class="label label-success">{!! $user->level->permission !!}</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
                </div>
                </div>
	@endsection