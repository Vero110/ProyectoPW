<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Inicio</title>
</head>
<body style="background-color: #f0f0f0; font-family: Arial, sans-serif;">
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div class="container">
            <div class="row">
                <script>
                    @if(session()->has('confirmacion'))
                    
                      Swal.fire({
                        icon:'success',
                        title: 'Has iniciado sesión correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
        
                    @php
                        session()->forget('confirmacion');
                    @endphp
                    
                    @endif
                  </script>
                <div class="col-md-7">
                    <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        @csrf
                        <div class="card-header" style="background-color: #3498db; text-align: center;">
                            <h1 style="color: #fff;">IMPORTACIONES BEASTMEX</h1>
                        </div>
                        <div class="card-body">
                            <p>La empresa IMPORTACIONES BEASTMEX se dedica a la importación de componentes para PC y Laptops.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-header" style="background-color: #3498db; text-align: center;">
                            <h1 style="color: #fff;">Ingresar</h1>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/Guardar">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Correo:</label>
                                    <input type="email" name="txtCorreo" class="form-control" value="{{ old('txtCorreo') }}" required>
                                    <p style="color: #ff0000; font-style: italic; font-weight: bold;">{{ $errors->first('txtCorreo') }}</p>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Contraseña:</label>
                                    <input type="password" name="txtContraseña" class="form-control" value="{{ old('txtContraseña') }}" required>
                                    <p style="color: #ff0000; font-style: italic; font-weight: bold;">{{ $errors->first('txtContraseña') }}</p>
                                </div>
                                <div style="text-align: center;">
                                    <button type="submit" class="btn" style="background-color: #3498db; color: #fff;">Ingresar</button>
                                </div>
                                <br>
                                <div class="mb-3" style="text-align: center;">
                                    <label class="form-label">¿No tienes cuenta?</label>
                                    <label class="form-label">Regístrate aquí</label>
                                    <br>
                                    <button type="submit" class="btn btn-light">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>





