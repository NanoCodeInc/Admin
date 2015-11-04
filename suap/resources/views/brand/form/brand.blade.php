<div class="box-body">
	<div class="form-group">
		{!! Form::label('name','Nombre:') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la nueva marca']) !!}
	</div>
	<div class="form-group">
    	{!! Form::label('file','Imagen:') !!}
    	{!!Form::file('file')!!}
    </div>
</div>