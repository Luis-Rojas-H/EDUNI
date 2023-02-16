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

  <body id="login">
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
    
  <div class="container-fluid py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-xl-11">
          <div class="row">
            <div class="col-lg-8">
              <div class="card-body p-md-5 mx-md-4">
                
                <!-- COSTO DE ENVÍO -->
                <div class="login text-left pt-5">
                  <h1 class="mt-1 mb-3 pb-1">Costos de envío</h1>
                  <p class="letra">Realizamos envíos a los siguientes distritos: <br><br>
                  Miraflores, Surquillo, San Isidro, San Borja, Magdalena, Lince, Jesús María, Cercado, Breña, Rímac, Independencia, Los Olivos. <br><br>
                  Para otros distritos contamos con la opción de recojo en tres diferentes puntos, sin ningún costo adicional. <br><br>
                  No contamos con envío para provincias. <br> <br>
                  Todos los pedidos se entregan los días viernes de 9 a.m. a 5 p.m., considerando toda compra realizada hasta el día jueves de cada semana. </p>
                    <div class="table-responsive pt-4">
                    <table class="table">
                      <tr class="bgcabecera"> <!-- Color cabecera de tabla -->
                        <th>Región </th>
                        <th>Costo </th>
                      </tr>
                      <tr class="bgfila">
                        <td>Lima y zonas Metropolitanas   </td>
                        <td>s/ 7 </td>
                      </tr>
                      <tr class="bgfila">
                        <td>Callao   </td>
                        <td>s/ 10 </td>
                      </tr>
                      <tr class="bgfila">
                        <td>Recojo en Universidad Nacional de Ingeniería   </td>
                        <td>Gratis </td>
                      </tr>
                      <tr class="bgfila">
                        <td>Recojo en CEPRE-UNI Magdalena</td>
                        <td>Gratis </td>
                      </tr>
                    </table>
                  </div>                    
                </div>                    
              </div>  
            </div>
            <div class="col-md-9 col-lg-6 col-xl-4 text-center">
              <img src="img/Login imagen.png" class="img-fluid posicion" alt="Sample image">
            </div>
          </div>   
      </div>
    </div> 
  </div>
  
  <!-- FORMAS DE PAGO -->
  <div class="container-fluid py-0 h-100">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-xl-11">
        <div class="row">
          <div class="card-body p-md-5 mx-md-4"> 
            <h1 class="mt-1 mb-3 pb-1">Nuestras formas de pago</h1> <br>              
            <div class="card p-4 w-100 text-center justify-content-center">
              <div class="row align-items-center">
                <div class="col-3">
                  <img src="img/compvisa.png" class="flex img-fluid" alt="resposive image">
                </div>
                <div class="col-3">
                  <img src="img/compmastercard.png" class="flex img-fluid" alt="resposive image">
                </div>
                <div class="col-3">
                  <img src="img/compniubiz.jpg" class="flex img-fluid" alt="resposive image">
                </div>
                <div class="col-3">
                  <img src="img/compyapeplin.png" class="flex img-fluid" alt="resposive image">
                </div>
              </div>
            </div>             
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="background-color: skyblue;">
    <div class="row text-center p-4">
      <div class="col-4">
        <img src="img/logo blanco.png" alt="Logo EDUNI">
      </div>
      <div class="col-4">
        <img src="img/logo UNI.png" alt="Logo UNI">
      </div>
      <div class="col-4 d-flex align-items-center justify-content-center">
        <img src="img/icono perfil.png" alt="" class="pe-4">
        <div class="d-flex flex-column text-end">
          <a href="#" class="text-primary" style="text-decoration: none;">Iniciar sesión</a>
          <a href="#" style="text-decoration: none;">Registrarse</a>
        </div>
      </div>
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
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
  </body>
  </html>