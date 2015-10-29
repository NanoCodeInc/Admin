@if(Session::has('message'))
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>	<i class="icon fa fa-check"></i> Alerta!</h4>
		{!! Session::get('message') !!}
	</div>
@endif