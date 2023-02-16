<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!-- Mi estilo CSS -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/pedidos.css">


  <!-- Imagen del logo y título -->
  <link rel="icon" href="img/icono inicio.png">
  <title>EDUNI - Tienda Virtual</title>
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg bg-color">
    <div class="container-fluid">
      <div class="row align-items-start">
        <div class="col-4">
          <a class="logo-eduni">
            <img src="img/logo blanco.png" class="d-inline-block align-text-top">
          </a>
        </div>
        <div class="col-4">
          <a class="logo-uni">
            <img src="img/logo UNI.png" class="d-inline-block align-text-top">
          </a> 
        </div>
        <div class="col-4">
          <ul class="navbar-nav login-menu text-decoration-underline">
            <li class="navbar-perfil cuenta">
              <a href="./pedidos.php">
                <img src="img/icono perfil.png" class="d-inline-block align-text-top">
              </a>
            </li>
            <li class="nav-item cuenta">
              <a class="nav-link color" href="./login.php">Iniciar sesión</a>
            </li>
            <li class="nav-item cuenta">
              <a class="nav-link color" href="./register.php">Regístrate</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
    
  <!-- Menu -->
  <nav class="navbar2 navbar-expand-lg">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link color-menu" href="./inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-menu" href="./libros.php">Libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-menu" href="./envios.php">Envíos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-menu" href="./preguntas.php">Preguntas frecuentes</a>
          </li>     
          <li class="nav-item">
            <a class="nav-link color-menu" href="./novedades.php">Novedades</a>
          </li>
        </ul>
        <ul class="navbar-nav me-5 mb-2 mb-lg-0">
          <?php
            session_start();
            if(isset($_SESSION['logueado']) && isset($_SESSION['id'])){
          ?>
          <li class="nav-item">
            <a class="nav-link color-menu" href="./favoritos.php">
              <img src="img/icono_favoritos.png" alt=""> Favoritos
            </a>
          </li>
          <?php
            }
          ?>
          <li class="nav-item">
            <a class="nav-link color-menu" href="./carrito.php">
              <img src="img/icono carrito-compras.png" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Vista inicio -->
  <div class="container-fluid py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-xl-11">
        <div class="row">
          <div class="col-lg-6">
            <div class="card-body p-md-5 mx-md-3">
            <!-- Mejores libros -->
            <div class="login text-left">
              <img src="img/mejores libros.png"alt="">
            </div>
            <p style="font-size: 22px;">Adquiere las mejores ofertas y novedades de las publicaciones que realiza la editorial de la UNI sobre ingeniería, arquitectura, matemática, estadística, química, literatura, ciencias sociales y más.</p>
            <form class="input-group pt-3">
              <input class="form-control form-control-lg" type="search" placeholder="Ingresa título, autor o palabra clave" aria-label="Search">
              <button class="btn btn-confirmar btn-lg" type="submit">Buscar</button>
            </form>
            </div>  
          </div>
          <div class="col-lg-6">
          <img src="img/imagen inicio.png" class="img-fluid posicion" alt="Login imagen">
          </div>
        </div>   
      </div>
    </div>
  </div>

  <!-- Columnas -->
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-xl-10">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card-body p-md-2 mx-md-1">
                
                        <!-- Categorías -->
                        <div>
                            <img src="img/imagen_categoria.png" class="img-fluid posicion" alt="Login imagen">
                        </div>
                        <div class="card bg-categoria">
                            <div class="card-img">
                                <div class="box-list">
                                    <!-- card-img-overlay -->
                                    <h1 class="subtitulfiltro login p-3 text-center">Categorías</h1>
                                    <!-- Lista de categorías -->
                                    <ul class="nav flex-column p-md-3">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Mostrar todo</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gratis</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Matemática - Estadística</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Literatura - Arte</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Física - Química - Biología - Geología</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Arquitectura - Urbanismo - Patrimonio Edificado</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">UNI - Historia de la CyT - Política de la CyT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ingenierías</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Electrónica - TIC´S - Software - Computación - Programación</a>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Humanidades - Letras - Ciencias Sociales</a>
                                        </li> 
                                    </ul>
                                </div>
                            </div>
                        </div>                                                       
                    </div>  
                </div>
                <!-- MUESTRA DE LIBROS -->
                <div class="col-md-7 col-lg-6 col-xl-9">
                    <h1 class="mt-5 mb-3 pb-1 bgtitulo_celeste">Mostrar Todo</h1>
                    <hr class="bg-color"> <!-- Falta alargar y engrosar a la línea celeste -->

                    <!-- Tabla d muestras de libros - INICIO -->
                    <div class="row"> <!-- Fila 1-->
                        <div class="col-md-3 portafolio-item">
                            <a href="libro_unidad.html" class="text-decoration-none login">
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item ">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item flex-d">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                    </div> <br>
                    <div class="row"> <!-- Fila 2-->
                        <div class="col-md-3 portafolio-item ">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item ">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                    </div> <br>
                    <div class="row"> <!-- Fila 3-->
                        <div class="col-md-3 portafolio-item ">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item ">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 portafolio-item">
                            <a>
                                <div class="card" style="width: 18rem; height: 35rem;">
                                    <img src="img/libro1.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h6 class="card-title">VARIABLE COMPLEJA</h6>
                                        <p class="card-text mb-1">P. Canales</p>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                                        <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                                        <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                                        <div>
                                            <div class="row p-3">
                                                <div class="col bgdescuento justify-content-center"> 
                                                    <p>35% dsto.</p>
                                                </div>
                                                <div class="col text-end">
                                                    <h6 class="mb-0 text-black-50"><s><sup>S/.</sup>69.00</s></h6>
                                                    <h3></s><sup>S/.</sup>44.85</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </a>
                        </div>
                    </div> <br>
   
                    <br><br>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center ">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav> <br> <br>


                </div>
            </div>   
        </div>
    </div>
</div>
<!-- Columnas -->

  <!-- Footer -->
  <footer class="footer-content">
    <!-- Section: Links  -->  
      <div class="container text-center text-md-start">
        <!-- Grid row -->
        <div class="row mt-1">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto p-2">
            <!-- Content -->
            <div class="btn-group-vertical p-4">
              <img src="img/logo blanco.png">
              <br><br>
              <img src="img/logo UNI.png">
            </div>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="suscribete col-md-2 col-lg-2 col-xl-3 mx-auto mb-2 text-decoration-none">
            <!-- Links -->
            <p><a href="#!" class="text-reset">Términos y condiciones</a></p>
            <p><a href="#!" class="text-reset">Políticas de devolución</a></p>
            <p><a href="#!" class="text-reset">Privacidad y seguridad</a></p>
            <p><a href="#!" class="text-reset">Cómo comprar</a></p>
            <p><a href="#!" class="text-reset">Nuestras formas de pago</a></p>
            <p><a href="#!" class="text-reset">Costos de despacho</a></p>
            <p><a href="reclamos.html" class="text-reset">Libro de reclamaciones</a></p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="suscribete col-md-4 col-lg-2 col-xl-3 mx-auto mb-md-0 mb-3">
            <!-- Links -->
              <p>Suscríbete para recibir ofertas y promociones</p>              
                <div class="input-group">
                  <input type="email" class="form-control form-control-lg"
                  placeholder="Email">
                  <button type="button"  class="btn btn-confirmar btn-lg active"> 
                  Enviar
                  </button>
                  </div>   
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    <!-- Section: Links  -->
  
    <div class="footer-creditos p-4">
      <div class="row mt-2">
        <div class="col-9 justify-content-end">
        Av. Tupac Amaru N°210 Rímac, Sótano del Pabellón Central de la UNI - Lima, Perú
        </div>
        <div class="col">
        Siguenos en:
          <!-- Facebook -->
          <a href="https://es-la.facebook.com/">
            <img src="img/facebook.png">
          </a>
          <!-- Instagram -->
          <a href="https://es-la.facebook.com/">
            <img src="img/instagram.png">
          </a>
          <!-- Twitter -->
          <a href="https://es-la.facebook.com/">
            <img src="img/twitter.png">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>