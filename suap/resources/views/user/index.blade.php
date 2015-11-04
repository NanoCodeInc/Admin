@extends('layouts.admin')
	@section('content')
  <div class="col-xs-12" ng-app="Suap">
  @include('partials.alerts.success')
  
  <div class="box" ng-controller="IndexCtrl">
		                <div class="box-header" >
                    <div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar..." ng-model="search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  <div class="box-tools">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover" >
                    <tr>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Nivel</th>
                      <th>Acciones</th>
                    </tr>
                    <tr ng-repeat="user in users | filter:search | startFrom:(currentPage - 1) * pageSize | limitTo: pageSize">
                      <td>@{{ user.name }}</td>
                      <td>@{{ user.email }}</td>
                      <td><span class="label label-success">@{{ user.level.permission }}</span></td>
                        <td>
                          <button class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>

                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <div class="no-margin pull-right">
                  <uib-pagination total-items="users.length" ng-model="currentPage" items-per-page="pageSize"></uib-pagination>
                    
                  </div>
                </div>

                </div>
                </div>
	@endsection

  @section('scripts')
    {!! Html::script('js/Angular/controllers/usuarioctrl.js') !!}
  @endsection





















