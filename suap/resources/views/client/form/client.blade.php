
<div class="form-group">
	{!! Form::label('clientname','Nombre del Cliente') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del nuevo Cliente']) !!}
</div>
<div class="form-group">
  	{!! Form::label('company','Compañia') !!}
	  {!! Form::text('work', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la compañia']) !!}
</div>

<div class="form-group">
    {!! Form::label('descriptionwork','Descripción del trabajo realizado') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Ingresa un breve trabajo de lo realizado en la compañia']) !!}
</div>

<div class="form-group">
    {!! Form::label('addresscompany','Dirección de la compañia') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingresa la dirección de la compañia']) !!}
</div>
		
<div class="form-group">
    {!! Form::label('telefono','Telefono') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el telefono de la compañia']) !!}
</div>

<div class="form-group">
    {!! Form::label('file_text','Escoge la imagen del Cliente') !!}
    {!! Form::file('file') !!}
</div>
    		