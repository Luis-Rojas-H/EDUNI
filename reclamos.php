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
              <a class="nav-link color-menu" href="./envios.php">Costos de envío</a>
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
    
    <div class="container-fluid py-4 h-100 pd-3">
      <section class="main-content">
        <div class="container">
          <div class="card d-flex bg-white flex-row shadow">
            <ul class="nav nav-tabs vertical-tab flex-column shadow p-4" id="myTab" role="tablist">
              <h2 class="text-center pt-4">LIBRO DE RECLAMACIONES</h2>
              <div class="p-4">
                <!-- Datos personales -->
                <div class="card p-4">
                  <h4>Datos Personales</h4><hr style="color: #27B3D2">
                  <form>
                    <div class="form-group row pt-3">
                      <label for="tipodoc" class="col-4 col-form-label">Tipo de documento</label> 
                      <div class="col-8">
                      <input id="tipodoc" name="tipodoc" placeholder="Tipo de documento" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="documento" class="col-4 col-form-label">Número de documento</label> 
                      <div class="col-8">
                      <input id="documento" name="documento" placeholder="N° Doc." class="form-control here" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="name" class="col-4 col-form-label">Nombres</label> 
                      <div class="col-8">
                        <input id="name" name="name" placeholder="Nombres" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="surname" class="col-4 col-form-label">Apellidos</label> 
                      <div class="col-8">
                        <input id="surname" name="surname" placeholder="Apellidos" class="form-control here" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="razonsocial" class="col-4 col-form-label">Razón social</label> 
                      <div class="col-8">
                        <input id="razonsocial" name="razonsocial" placeholder="Razón social" class="form-control here" required="required" type="text">
                      </div>
                    </div>                   
                    <div class="form-group row pt-3">
                      <label for="direccion" class="col-4 col-form-label">Dirección</label> 
                      <div class="col-8">
                        <input id="direccion" name="direccion" placeholder="Dirección" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="distrito" class="col-4 col-form-label">Distrito</label> 
                      <div class="col-8">
                        <input id="distrito" name="distrito" placeholder="Distrito" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="provincia" class="col-4 col-form-label">Provincia</label> 
                      <div class="col-8">
                        <input id="provincia" name="provincia" placeholder="Provincia" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="departamento" class="col-4 col-form-label">Departamento</label> 
                      <div class="col-8">
                        <input id="departamento" name="departamento" placeholder="Departamento" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="telefono" class="col-4 col-form-label">Teléfono</label> 
                      <div class="col-8">
                        <input id="telefono" name="telefono" placeholder="Teléfono" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="celular" class="col-4 col-form-label">Celular</label> 
                      <div class="col-8">
                        <input id="celular" name="celular" placeholder="Celular" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="email" class="col-4 col-form-label">Email asociado</label> 
                      <div class="col-8">
                        <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                  </form>
                </div>
                <br>
                <!-- Identificación del producto -->
                <div class="card p-4">
                  <h4>Identificación del producto</h4> <hr style="color: #27B3D2">
                  <form>
                    <div class="form-group row pt-3">
                      <label for="montorecl" class="col-4 col-form-label">Monto reclamado (en soles)</label> 
                      <div class="col-8">
                        <input id="montorecl" name="montorecl" placeholder="Monto" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="bolefact" class="col-4 col-form-label">Número de boleta o factura</label> 
                      <div class="col-8">
                        <input id="bolefact" name="bolefact" placeholder="Número de boleta o factura" class="form-control here" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="numpedido" class="col-4 col-form-label">Número de pedido</label> 
                      <div class="col-8">
                        <input id="numpedido" name="numpedido" placeholder="Número de pedido" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="tlibro" class="col-4 col-form-label">Título del libro</label> 
                      <div class="col-8">
                        <input id="tlibro" name="tlibro" placeholder="Título del libro" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="alibro" class="col-4 col-form-label">Autor del libro</label> 
                      <div class="col-8">
                        <input id="alibro" name="alibro" placeholder="Autor del libro" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="edlibro" class="col-4 col-form-label">Edición del libro</label> 
                      <div class="col-8">
                        <input id="edlibro" name="edlibro" placeholder="Edición del libro" class="form-control here" required="required" type="text">
                      </div>
                    </div>
                  </form>
                </div>
                <br>
                <!-- Detalles del reclamo -->
                <div class="card p-4">
                  <h4>Detalles del reclamo</h4> <hr style="color: #27B3D2">
                  <form>
                    <div class="form-group row pt-3">
                      <label for="name" class="col-4 col-form-label">Elegir la tienda</label> 
                      <div class="col-8">
                        <select class="form-select" id="state" required>
                          <option value="">Buscar...</option>
                          <option>Central UNI - Rímac</option>
                          <option>Cepre UNI - Magdalena</option>
                          <option>Tienda virtual del Fondo Editorial UNI</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="dirtienda" class="col-4 col-form-label">Dirección de la tienda</label> 
                      <div class="col-8">
                        <input id="dirtienda" name="dirtienda" placeholder="Dirección de la tienda" class="form-control here" type="text">
                      </div>
                    </div>
                    <div class="form-group row pt-3">
                      <label for="tiporeclamo" class="col-4 col-form-label">Tipo de reclamo</label> 
                      <div class="col-8">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Reclamo
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Queja
                          </label>
                        </div>

                      </div>
                    </div>
                    <div class="pt-3">
                      <label for="exampleFormControlTextarea1" class="login form-label pb-2">Descripción</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aquí"></textarea>
                    </div>
                    <div class="pt-3">
                      <label for="exampleFormControlTextarea1" class="login form-label pb-2">Detalles</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aquí"></textarea>
                    </div>
                    <div class="pt-3">
                      <label for="exampleFormControlTextarea1" class="login form-label pb-2">Pedido</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aquí"></textarea>
                    </div>
                    <div class="form-check pt-3">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                      <label class="form-check-label" for="flexCheckIndeterminate">
                        Check de <a href="privacidad.html">política de privacidad</a>.
                      </label>
                    </div>
                  </form>
                </div>
                <br>
                <!-- Tomar en cuenta -->
                <div class="p-2">
                  <h4>Tomar en cuenta</h4>
                  <form>       
                    <div class="form-group row pt-3">
                      <label for="birthday">
                        <ol>
                          <li>RECLAMO: Disconformidad relacionada a los productos o servicios.</li>
                          <li>QUEJA: Disconformidad no relacionada a los productos o servicios, o, malestar o descontento respecto a la atención al público.</li>
                          <li>El proveedor deberá dar respuesta al reclamo en un plazo no mayor a quince (15) días hábiles.</li>
                          <li>La formulación del reclamo no impide acudir a otras vías de solución de controversias, ni es requisito previo para interponer una denuncia ante el Indecopi.</li>
                        </ol>           
                    </div>
                  </form>
                  <div class="pt-5 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-lg btn-confirmar me-md-5 px-5" type="button">Enviar</button>
                    <button class="btn btn-lg btn-confirmar px-5" type="button">Limpiar</button>
                  </div>
                </div>
              </div>    
            </ul>
          </div>
        </div>
      </section>
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
              <p><a href="terminos.html" class="text-reset">Términos y condiciones</a></p>
              <p><a href="devolucion.html" class="text-reset">Políticas de devolución</a></p>
              <p><a href="privacidad.html" class="text-reset">Privacidad y seguridad</a></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>

