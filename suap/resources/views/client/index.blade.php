@extends('layouts.admin')	
	@section('content')
  @include('partials.alerts.errors')


   <section class="content">

      <div class="row">
        <div class="col-md-12">
        <div class="box box-primary box-body">
            <div class="box-header with-border">
                <i class="fa fa-fw fa-user-md"></i>
                <h3 class="box-title">Listado de clientes</h3>
                <table class="table">
      <thead>
        <tr>
          <th>Nombre de la compañia</th>
          <th>Dirección</th>
          <th>Telefono</th>
          <th>Compañia</th>
          <th>Nombre del trabajo Realizado</th>
          <th>Descripción del trabajo realizado</th>
        <tr>
      </thead>
      <tbody>
      @foreach($clients as $client)
        <tr>
          <td>{!!$client->name!!}</td>
          <td>{!!$client->address!!}</td>
          <td>{!!$client->phone!!}</td>

          <td>{!!$client->work!!}</td>
          <td>{!!$client->description!!}</td>



          <td>{!!$client->file_id!!}</td>
          <td>{!!link_to_route('clients.edit', $title = 'Editar', $parameters = $client->id, $attributes = ['class'=>'btn btn-primary button-striped btn-ripple button-full-striped'])!!}</td>
        </tr>
      @endforeach
      </tbody>
    </table>


            </div>
        </div>
      </div>
      </div>
      </section>


@endsection