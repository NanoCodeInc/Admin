<div class="box-body">
	<div class="form-group">
		{!! Form::label('title','Titulo:') !!}
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el titulo del nuevo servicio']) !!}
	</div>
	<div class="form-group">
	  	{!! Form::label('description','Descripción:') !!}
		{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la descripción del nuevo servicio']) !!}
	</div>
	<div class="form-group">
    	{!! Form::label('file','Imagen:') !!}
    	{!!Form::file('file')!!}
    </div>
</div>