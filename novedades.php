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

    <div class="container-fluid">
      <div class="m-5 d-flex justify-content-center pt-5">
        <!-- Carrusel inicio-->
        <div id="carouselNovedadIndicators" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselNovedadIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselNovedadIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselNovedadIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner"  style="width: 1250px;">
              <div class="carousel-item active">
                <img src="img/novedad img-Feria.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/novedad img-Feria.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/novedad img-Feria.png" class="d-block w-100" alt="...">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselNovedadIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselNovedadIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
        </div>    
        <!-- Carrusel inicio--> 
      </div>
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center">
          <p class="nota"> Cabe resaltar que, en esta nueva edición la feria cuenta por primera vez con una ronda de conversatorios y exposiciones realizadas por científicos e investigadores, que estarán aptas para todo el público asistente.</p>
        </div>
      </div>
      <!-- Nuevos libros -->
      <div class="row justify-content-center align-items-center">
        <div class="col-md-4 p-4 bgtitulo">
          ¡Nuevos libros!
        </div>
        <div class="col-md-4 text-center">
          <img src="img/imagen-novedad.png" class="con" alt="">
        </div>
      </div>
      <!-- Nuevos libros -->
      <!-- Carrusel Nuevos libros -->
      <div class="container p-4">
        <div id="carouselExample" class="carousel slide"  data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro1.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">VARIABLE COMPLEJA</h6>
                      <p class="card-text">P. Canales</p>
                      <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro2.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">TEORÍA APLICADA DEL AUTOMÓVIL</h6>
                      <p class="card-text">Carlos Munares Tapia</p>
                      <p class="card-text">Teoría y Ejercicios, 2019, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>                
                </div>
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro3.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">PROYECTO DE NACIÓN</h6>
                      <p class="card-text">Alfonso López Chau</p>
                      <p class="card-text">Economía, 2019, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>                
                </div>
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro4.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">EL ARTE DEL DISEÑO LÓGICO DIGITAL</h6>
                      <p class="card-text">Luis Romero Goytendía</p>
                      <p class="card-text">Sistemas digitales, 2018, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro1.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">VARIABLE COMPLEJA</h6>
                      <p class="card-text">P. Canales</p>
                      <p class="card-text">Teoría y Ejercicios, 2021, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro2.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">TEORÍA APLICADA DEL AUTOMÓVIL</h6>
                      <p class="card-text">Carlos Munares Tapia</p>
                      <p class="card-text">Teoría y Ejercicios, 2019, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>                
                </div>
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro3.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">PROYECTO DE NACIÓN</h6>
                      <p class="card-text">Alfonso López Chau</p>
                      <p class="card-text">Economía, 2019, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>                
                </div>
                <div class="col-md-3">
                  <div class="card border-0" style="width: 18rem; height: 35rem;">
                    <img src="img/libro4.png" class="img-fluid border">
                    <div class="card-body">
                      <h6 class="card-title">EL ARTE DEL DISEÑO LÓGICO DIGITAL</h6>
                      <p class="card-text">Luis Romero Goytendía</p>
                      <p class="card-text">Sistemas digitales, 2018, Tapa Blanda, Nuevo</p>
                      <div class="price-box my-3 text-end">
                        <sup>S/.</sup><span class="text-dark display-6">44.85</span>
                      </div>
                    </div>
                  </div>                
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Carrusel Nuevos libros -->      
      <!-- Flyers -->
      <div class="row justify-content-center align-items-center d-flex">
        <div class="col-lg-4">
          <img src="img/flyer1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
        </div>
        <div class="col-lg-4">
          <img src="img/flyer2.png" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
        </div>
      </div>
      <div class="row justify-content-center p-4">
        <div class="col-lg-4">
          <img src="img/flyer3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
        </div>
        <div class="col-lg-4">
          <img src="img/flyer4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt=""/>
        </div>
      </div>
      <!-- Flyers -->
    </div>
  
    <!-- Footer -->
    <footer class="footer-content text-center">
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
                    <p><a href="#!" class="text-reset">Libro de reclamaciones</a></p>
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
                <div class="col-lg-6 justify-content-center">
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