<?php
    session_start();
    if(isset($_SESSION['logueado']) && isset($_SESSION['id'])){
?>

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
    <link rel="stylesheet" type="text/css" href="css/carrito.css">


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
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-xl-11">
            <div class="row">
              <div class="card-body p-md-5 mx-md-4">  
                  <div class="tabs">
                    <ul class="nav nav-tabs">
                      <li class="nav-item text-center">
                        <a class="nav-link active text-center" href="#tab1">
                          <div class="tab-circle justify-content-center align-items-center">
                            <svg width="50" height="46" viewBox="0 0 50 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M1.22376 7.42265C1.53011 7.01685 2.0091 6.77829 2.51754 6.77829H39.0883C39.5968 6.77829 40.0758 7.01685 40.3821 7.42265C40.6885 7.82844 40.7867 8.35446 40.6474 8.84346L34.3793 30.8465C34.1809 31.543 33.5445 32.0234 32.8203 32.0234H8.78559C8.06136 32.0234 7.42499 31.543 7.22657 30.8465L0.958524 8.84346C0.819223 8.35446 0.917422 7.82844 1.22376 7.42265ZM4.66487 10.0204L10.0093 28.7813H31.5965L36.941 10.0204H4.66487Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9259 12.1792C13.8106 12.0421 14.6389 12.6483 14.776 13.533L16.4835 24.5561C16.6205 25.4408 16.0144 26.2691 15.1297 26.4062C14.2449 26.5432 13.4166 25.9371 13.2796 25.0524L11.5721 14.0293C11.435 13.1445 12.0411 12.3162 12.9259 12.1792Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M28.8972 12.1792C29.782 12.3162 30.3881 13.1445 30.251 14.0293L28.5435 25.0524C28.4065 25.9371 27.5782 26.5432 26.6934 26.4062C25.8087 26.2691 25.2026 25.4408 25.3396 24.5561L27.0471 13.533C27.1842 12.6483 28.0125 12.0421 28.8972 12.1792Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1054 12.1601C22.0007 12.1601 22.7265 12.8859 22.7265 13.7812V24.8043C22.7265 25.6996 22.0007 26.4253 21.1054 26.4253C20.2101 26.4253 19.4844 25.6996 19.4844 24.8043V13.7812C19.4844 12.8859 20.2101 12.1601 21.1054 12.1601Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9582 37.1026C11.5854 37.1026 10.4726 38.2155 10.4726 39.5882C10.4726 40.961 11.5854 42.0738 12.9582 42.0738C14.3309 42.0738 15.4438 40.961 15.4438 39.5882C15.4438 38.2155 14.3309 37.1026 12.9582 37.1026ZM7.23047 39.5882C7.23047 36.4249 9.79484 33.8605 12.9582 33.8605C16.1215 33.8605 18.6859 36.4249 18.6859 39.5882C18.6859 42.7516 16.1215 45.3159 12.9582 45.3159C9.79485 45.3159 7.23047 42.7516 7.23047 39.5882Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0246 37.1026C26.6518 37.1026 25.539 38.2155 25.539 39.5882C25.539 40.961 26.6518 42.0738 28.0246 42.0738C29.3973 42.0738 30.5102 40.961 30.5102 39.5882C30.5102 38.2155 29.3973 37.1026 28.0246 37.1026ZM22.2969 39.5882C22.2969 36.4249 24.8613 33.8605 28.0246 33.8605C31.1879 33.8605 33.7523 36.4249 33.7523 39.5882C33.7523 42.7516 31.1879 45.3159 28.0246 45.3159C24.8613 45.3159 22.2969 42.7516 22.2969 39.5882Z" fill="white"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0623 1.4543C40.3054 0.832778 40.9046 0.423767 41.5719 0.423767H48.121C49.0162 0.423767 49.742 1.14953 49.742 2.04481C49.742 2.94009 49.0162 3.66586 48.121 3.66586H42.6785L40.596 8.98983C40.2699 9.82359 39.3296 10.2351 38.4958 9.90898C37.662 9.58284 37.2505 8.64256 37.5767 7.8088L40.0623 1.4543Z" fill="white"/>
                              </svg>
                          </div>
                          <p>Carro de compras</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab2">
                          <div class="tab-circle">
                            <img src="image2.jpg" alt="Tab 2 Image">
                          </div>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#tab3">
                          <div class="tab-circle">
                            <img src="image3.jpg" alt="Tab 3 Image">
                          </div>
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab1">
                        <div class="content-fluid p-4 border-2">Contenido de la pestaña 1</div>
                      </div>
                      <div class="tab-pane" id="tab2">Contenido de la pestaña 2</div>
                      <div class="tab-pane" id="tab3">Contenido de la pestaña 3</div>
                    </div>
                  </div>                
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
} else {
  header("Location:http://localhost/EDUNI/EDUNI/login.php"); 
}
?>