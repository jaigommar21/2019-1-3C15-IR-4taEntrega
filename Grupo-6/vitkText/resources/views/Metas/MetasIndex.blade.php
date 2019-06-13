<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h2>Gastoy y Metas</h2>
      <ol class="breadcrumb">
        <li class="active">Metas</li>
      </ol>
      <p><a href="{{action('MetasController@create')}}" class="btn btn-primary">Nuevo</a><p>
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Costo</th>
            <th>Ahorrado</th>
            <th colspan="2" style="text-align:center;">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($metas as $meta)
          <tr>
            <td>{{$meta->nombre}}</td>
            <td>{{$meta->descripcion}}</td>
            <td>S/ {{$meta->costo}}</td>
            <td>S/ {{$meta->ahorrado}}</td>
            <td style="text-align:center;"><a href="{{action('MetasController@edit', $meta->id)}}" class="btn btn-warning">Editar</a></td>
            <td style="text-align:center;">
              <form action="{{action('MetasController@destroy', $meta->id)}}" method="post">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>