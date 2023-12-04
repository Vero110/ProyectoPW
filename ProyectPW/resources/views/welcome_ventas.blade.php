<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>
<body>
    <ul class="nav nav-tabs">
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link actived" href="/">Inicio</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ventas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Registrar</a>
              <a class="dropdown-item" href="#">Consultar</a>
            </div>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Registrar</a>
            <a class="dropdown-item" href="#">Editar</a>
            <a class="dropdown-item" href="#">Consultar</a>
            <a class="dropdown-item" href="#">Consultar por nombre</a>
          </div>
        </li>
      </ul>
    
    <h1 class="display-3 text-center" style= "color: #4585ed;">Inicio</h1>
    
    <div style="background-color: #f7f7f7; padding: 20px;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div style="text-align: left; flex: 1;">
                <h1 style="font-size: 2.5rem; color: #17a2b8;">Bienvenido, usuario</h1>
                <h1 style="font-size: 2rem; color: #17a2c9;">Plataforma de administración de Importaciones BEASTMEX</h1>
                <h1 style="font-size: 1.5rem; color: #17a2c9;"><i>Área de ventas</i></h1>
                <br>
                <p style="font-size: 1.2rem; text-align: justify;">La empresa ha establecido alianzas 
                    estratégicas con fabricantes líderes a nivel mundial y expandiendo su presencia en todo México y América Latina. 
                    Su compromiso con la excelencia y la satisfacción del cliente nos ha llevado a ser un referente en la industria.</p>
            </div>
            <div style="flex: 1; text-align: right;">
                <img src="{{ asset('imagenes/imagen_inicio.jpg') }}" alt="Imagen de inicio" style="width: 330px; height: 260px; border: 5px solid #17a2b8; border-radius: 10px;">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    
    <footer class="bg-primary text-light text-center py-3">
        <p>Importaciones BEASTMEX &copy; 
            <br>
            31 de octubre del 2023</p>
    </footer>
    
</body>
</html>