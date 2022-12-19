<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <title>Cars</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.jpg') }}"/>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/create">Nuevo<span class="sr-only">(current)</span></a>
          </li>
        </ul>
    </nav>

    <h1>Lista de vehículos</h1>

    @if($autos)
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Modelo</th>
          <th scope="col">Marca</th>
          <th scope="col">Motor</th>
          <th scope="col">Color</th>
          <th scope="col">Patente</th>
          <th scope="col">Puertas</th>
        </tr>
      </thead>
      <tbody>
        @foreach($autos as $auto)
        <tr>
          <th scope="row">{{ $auto->id }}</th>
             <td>{{ $auto->model }}</td>
             <td>{{ $auto->brand }}</td>
             <td>{{ $auto->engine }}</td>
             <td>{{ $auto->color }}</td>
             <td>{{ $auto->registration }}</td>
             <td>{{ $auto->doors }}</td>
             <td><a href="{{ route('edit', $auto->id) }}"><button type="button" class="btn btn-primary">Editar</button></a></td>
             <td><a href="{{ route('delete', $auto->id) }}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @else
    <h2>Aún no existen autos para mostrar</h2>
    <a href="/create">Agregar auto</a>

    @endif

</body>
</html>