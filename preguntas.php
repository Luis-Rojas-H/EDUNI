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

  <section class="h-100 gradient-form">
    <div class="container-fluid py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-50">
        <div class="col-xl-11">
          <div class="row">
              <div class="card-body p-md-5 mx-md-4">
    
    <!-- Preguntas frecuentes -->
    <div class="login text-left pt-5">
      <h1 class="mt-1 mb-5 pb-1">
        Preguntas frecuentes
      </h1>
    </div>

    <!-- Always open - Siempre abierto -->
    <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
      <!-- Item 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
            <p class="fw-bold">
              ¿Tienen tienda física?
            </p>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
            <p class="login">
              Sí, puedes comprar en el Fondo editorial de la UNI ubicado en el Sótano del Pabellón Central.
            </p>
          </div>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
            <p class="fw-bold">
              ¿Cómo realizar mi compra?
            </p>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
          <div class="accordion-body">
            <p class="login">
              Si eres nuevo en nuestro sitio, lo primero que debes realizar es “Registrarte“ con un email al cual tengas acceso porque es ahí donde enviaremos toda la información relevante asociada a tu compra. <br>
              Después de eso visita nuestro catálogo de Libros. <br>
              Como último consejo, revisa los plazos de entrega que te indicamos. Dale clic al carrito de compras, revisa nuevamente tus datos personales y de envío o recojo y luego da clic en pagar para que elijas tu medio de pago.
            </p>
          </div>
        </div>
      </div>
      <!-- Item 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
            <p class="fw-bold">
              ¿Cómo hago seguimiento a mi compra?
            </p> 
          </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
          <div class="accordion-body">
            <p class="login">
              El seguimiento de tu compra puedes realizarlo directamente en tu perfil en la sección de “Seguimiento de pedidos” donde está cada una de las etapas descritas en las siguientes casillas: <br>
              <ul>
                <li class="login">
                  Obteniendo Productos: Es el inicio de todo el proceso, donde realizamos la compra de tu producto y/o libro al proveedor.
                </li>
                <li class="login">
                  Solicitado al Proveedor: Ya hemos enviado una orden de compra al proveedor y estamos esperando que nos envíe el producto y/o libro a nuestra oficina. Aquí debemos esperar la confirmación de stock y entrega en nuestra oficina de origen.
                </li>
                <li class="login">
                  En Oficina de Origen: Tu libro y/o producto ya llegó a nuestra oficina en origen (franquicia) y comenzaremos el proceso logístico de importación al país de destino.
                </li>
                <li class="login">
                  Viajando: Tu compra ya se encuentra en tránsito (avión o barco) desde el país de origen a tu país de destino. Este proceso podría tardar entre cinco y diez días aproximadamente.
                </li>
                <li class="login">
                  En Oficina de Envío: Tu producto ya llegó a nuestra bodega y podríamos despacharlo a tu domicilio. El proceso de embalaje y despacho solo comenzará cuando todos los productos de tu pedido se encuentren en bodega. Si tu compra es solo por un producto, en un par de días debe ser despachado.
                </li>  
                <li class="login">
                  Enviado: Tu pedido ha sido despachado. Puedes hacer el seguimiento de entrega en la web de la empresa de despacho que enviamos a tu correo electrónico.
                </li>
              </ul>
            </p>
          </div>
        </div>
      </div>
      <!-- Item 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
            <p class="fw-bold">
              ¿Quieres cambiar tu dirección?
            </p>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
          <div class="accordion-body">
            <p class="login">
              Antes de comprar puedes agregar o eliminar direcciones en tu perfil en la sección MIS DIRECCIONES y podrás elegir la que desees al momento de la compra.
            </p>
          </div>
        </div>
      </div>
      <!-- Item 5 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
            <p class="fw-bold">
              ¿Puedo anular una compra?
            </p>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
          <div class="accordion-body">
            <p class="login">
              No es posible anular una compra.
            </p>
          </div>
        </div>
      </div>
      <!-- Item 6 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
          <button class="accordion-button collapsed type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
            <p class="fw-bold">
              ¿Cómo pido el reembolso de dinero?
            </p>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
          <div class="accordion-body">
            <p class="login">
              No realizamos reembolsos o devoluciones de dinero.
            </p>
          </div>
        </div>
      </div>
      <!-- Item 7 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
            <p class="fw-bold">
              Garantía Legal, Cambios y/o Devoluciones de productos.
            </p>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
          <div class="accordion-body">
            <p class="login">
              Solo aceptamos cambios de productos en caso de que estos presenten fallas, deberán comunicarlo o acercarse para presentar la solicitud en un plazo no mayor a 5 días hábiles. No hacemos devoluciones.
            </p>
          </div>
        </div>
      </div>
    </div>
     
    <!-- Label -->   
    <div class="pt-5">
      <label for="exampleFormControlTextarea1" class="login form-label pb-4 p-2 fw-bold">¿Tienes alguna pregunta o sugerencia?</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aquí"></textarea>
    </div>

    <!-- Botón enviar -->
    <div class="pt-4 pb-4">
      <button class="btn btn-primary" type="submit">
        Enviar mi pregunta
      </button>
    </div>
  
    <p class="login">
      Tu pregunta/sugerencia se enviará a: <a href="mailto:jefatura.fondoeditorial@uni.edu.pe">jefatura.fondoeditorial@uni.edu.pe</a> y será atendida en un rango de 2 a 3 días hábiles.
    </p>


  </div></div></div></div></div>

  </section>

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
