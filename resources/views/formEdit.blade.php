<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" >
    <title>Form edit car</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.jpg') }}"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
            </li>
          </ul>
    </nav>

    <h3>Edite los datos</h3>

    <div class="center">
        <form method="POST" action="/updateCar" id="form" class="validate">

            @csrf <!-- token de seguridad, para evitar el envío de varios registros-->
            <input type="hidden" name="id" value="{{ $auto->id }}">

            <div class="form-field">
            <label for="full-name">Modelo</label>
            <input type="text" name="model" id="full-name" placeholder="A110" value="{{ $auto->model }}"/>
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
            <label for="brand-input">Marca</label>
            <input type="text" name="brand" id="brand" placeholder="Ford" value="{{ $auto->brand }}"/>
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="engine-input">Motor</label>
                <input type="text" name="engine" id="engine" placeholder="Diesel" value="{{ $auto->engine }}"/>
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="color-input">Color</label>
                <input type="text" name="color" id="color" placeholder="Rojo" value="{{ $auto->color }}"/>
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="registration-input">Patente</label>
                <input type="text" name="registration" id="registration" placeholder="ABC123" value="{{ $auto->registration }}"/>
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
                <label for="doors-input">Cantidad de puertas</label>
                <input type="text" name="doors" id="doors" placeholder="4" value="{{ $auto->doors }}"/>
            @error('model')
                {{ $message }}
            @enderror
            </div>
            <div class="form-field">
            <label for=""></label>
            <input type="submit" value="Finalizar" />
            </div>
        </form>
    </div>
</body>
</html>