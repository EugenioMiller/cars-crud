<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" >
    <title>Form add car</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.jpg') }}"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Volver<span class="sr-only">(current)</span></a>
            </li>
          </ul>
    </nav>

    <h3>Complete el formulario para crear un nuevo auto en la base de datos</h3>

    <div class="center">
        <form method="POST" action="/newCar" id="form" class="validate">

            @csrf <!-- token de seguridad, para evitar el envío de varios registros-->

            <div class="form-field">
            <label for="full-name">Modelo</label>
            <input type="text" name="model" id="full-name" placeholder="A110"  />
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
            <label for="brand-input">Marca</label>
            <input type="text" name="brand" id="brand" placeholder="Ford"  />
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="engine-input">Motor</label>
                <input type="text" name="engine" id="engine" placeholder="Diesel"  />
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="color-input">Color</label>
                <input type="text" name="color" id="color" placeholder="Rojo"  />
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="registration-input">Patente</label>
                <input type="text" name="registration" id="registration" placeholder="ABC123"  />
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="doors-input">Cantidad de puertas</label>
                <input type="text" name="doors" id="doors" placeholder="4"  />
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
            <label for=""></label>
            <input type="submit" value="Agregar" />
            </div>
        </form>
    </div>
    
</body>
</html>