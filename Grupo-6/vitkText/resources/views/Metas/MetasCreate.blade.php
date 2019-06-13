<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gastos y metas</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Metas</h2>
      <ol class="breadcrumb">
        <li><a href="{{action('MetasController@index')}}">Inicio</a></li>
        <li class="active">Nuevo</li>
      </ol>
      <form method="post" action="{{url('add')}}">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Descripcion">Descripcion:</label>
            <textarea class="form-control" name="descripcion" ></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Costo">Costo:</label>
            <input type="text" class="form-control" name="costo">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Ahorrado">Ahorrado:</label>
            <input type="text" class="form-control" name="ahorrado">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{action('MetasController@index')}}" class="btn btn-default">Cancelar</a>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>