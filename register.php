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

<body id="register">
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

  <div class="container-fluid py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-xl-11">
          <div class="row">
            <div class="col-lg-7">
              <div class="card-body p-md-5 mx-md-4">
                <!-- REGISTRO -->
                <div class="col-xs-2 login text-left  pt-5">
                  <h1 class="mt-1 mb-3 pb-1">Regístrate</h1>
                </div>

                <form action="./backend/auths/register.php"  method="post">
                  <!-- Email input -->
                  <div class="col-xs-4 form-outline mb-3">
                    <input type="email" name="email_uni" id="form3Example3" class="form-control form-control-lg"
                      placeholder="Email" />
                  </div>
        
                  <!-- Password input -->
                  <div class="form-outline mb-3">
                    <input type="password" name="pass_uni" id="form3Example4" class="form-control form-control-lg"
                      placeholder="Introduce una contraseña"/>
                  </div>
                  <div class="cuenta text-left text-lg-start mt-2 pt-1">
                    <button class="btn btn-light btn-lg btn-block mb-2" type="submit" style="color: white; background: #27B3D2">Regístrate</button>
                    <br>
                    <div class="text-body text-left mt-2 pt-4 mb-0">
                      <p>O puedes registrarte con:</p>
                      <button class="btn btn-lg btn-block btn-light mb-3" style="color: white; background-color: #dd4b39;"
                      type="submit">
                      <img src="img/icono google.png">
                      &nbspIngresa con Google &nbsp
                      </button>
                      <br>
                      <button class="btn btn-lg btn-block btn-light mb-3" style="color: white;background-color: #3b5998;"
                      type="submit">
                      <img src="img/icono fb.png">
                      &nbspIngresa con Facebook
                      </button>
                      <p class="text-body mt-2 pt-1 mb-0">¿Ya tienes una cuenta? &nbsp<a href="./login.php"
                        class="link-danger color-enlace-login" >Iniciar sesión</a></p>
                    </div>
                  </div>
                </form>
              </div>  
            </div>
            <div class="col-md-9 col-lg-6 col-xl-4">
              <img src="img/Register imagen.png" class="img-fluid posicion" alt="Sample image">
            </div>
          </div>   
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

<!-- Copyright -->
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
<!-- Copyright -->
</footer>
<!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>