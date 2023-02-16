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
    <!-- Navigation -->
    <nav id="header" class="navbar navbar-expand-lg bg-color">
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
                <div class="col text-end">
                    <ul class="navbar-nav login-menu text-decoration-underline">
                        <li class="navbar-perfil cuenta">
                            <img src="img/icono perfil.png" class="d-inline-block align-text-top">
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
                <ul class="navbar-nav list-inline mb-2 mb-lg-0">
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
            </div>
        </div>
    </nav>
    
    <!-- Columnas -->
    <div class="container-fluid pt-5 mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card-body p-md-2 mx-md-1 mb-5">
                    
                            <!-- Categorías -->
                            <div class="card bg-white border-2">
                                <div class="card-img">
                                <div class="box-list">

                                <!-- Datos del libro -->
                                <div class="box mb-5">
                                    <div class="row center-xs">
                                    <img src="img/libro1.png" class=" p-5" alt="Login imagen">
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">Formato:</div>
                                        <div class="col-6">Libro físico</div>
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">Autor:</div>
                                        <div class="col-6">Alfonso López Chau</div>
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">Editorial:</div>
                                        <div class="col-6">EDUNI</div>
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">Año:</div>
                                        <div class="col-6">2019</div>
                                     </div>
                                     <div class="row justify-content-center p-2">
                                        <div class="col-4">Idioma:</div>
                                        <div class="col-6">Español</div>
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">N° páginas:</div>
                                        <div class="col-6">230</div>
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">Categorías:</div>
                                        <div class="col-6">Liberalismo Socialismo</div>
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">N° páginas:</div>
                                        <div class="col-6">230 gr</div>
                                     </div>
                                     <div class="row justify-content-center p-1">
                                        <div class="col-4">Tamaño:</div>
                                        <div class="col-6">230 x 150</div>
                                     </div>
                                </div>
                            </div>
                                </div>
                            </div>                                                       
                        </div>  
                    </div>
                    <!-- MUESTRA DE LIBROS -->
                    <div class="col-md-7 col-lg-6 col-xl-9">
                        
                        <!-- INICIO SESION -->
                        <div class="login text-left p-4">
                            
                            <h1 class="mt-1 mb-3 pb-1">
                                Proyecto de Nación
                                <a href="#"><img src="img/icono compartir.png" alt=""></a>
                            </h1>
                            <h3 class="card-text mb-1">Alfonso López Chau</h3>
                            <br>
                            <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="1estrella"></span>
                            <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="2estrella"></span>
                            <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="3estrella"></span>
                            <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="4estrella"></span>
                            <span class="fa fa-star" onclick="calificar(this)" style="cursor: pointer;" id="5estrella"></span>
                            <form class="form-inline pt-3" id="form">
                                <div class="row">
                                    <div class="col-lg-2 text-md-start">
                                        <h6 class="mb-0 text-black-50">
                                            <s><sup>S/.</sup>69.00</s></h6>
                                        <h3></s><sup>S/.</sup>44.85</h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="mr-2">Cantidad:</label>
                                        <input type="number" class="form-control w-25" id="input-qty" name="qty" maxlength="5" value="1" required min="0">
                                        <div class="invalid-feedback">
                                        La cantidad debe ser mayor o igual a 0.
                                        </div>                      
                                    </div> 
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-2 text-md-start">
                                        <button class="btn btn-lg btn-confirmar" type="submit">Comprar</button>
                                    </div>
                                </div>
                            </form> 
                            <div class="text-md-start">
                                <a class="nav-link color-menu" href="">
                                    <img src="img/icono_favoritos.png" alt=""> Agregar a favoritos
                                </a>
                                <a class="nav-link color-menu" href="">
                                    <img src="img/icono carrito-compras.png" alt=""> Añadir al carrito
                                </a>
                            </div>
                            
                            <div class="pt-3">
                                <h2>Reseña del libro</h2>
                                <p>Este libro reúne artículos publicados principalmen te en el diario La República, en la revista Apertura y otros medios de comunicación. En sus páginas, el lector encontrará una retirada preocupación por la idea de Nación, Proyecto Nacional, y el dilema entre las opciones de un socialismo liberal o liberalismo social. Se publica por primera vez en formato de libro, una extensa carta abierta, escrita en 1996, dirigada entonces al Presidente de la República Alberto Fujimori, en donde se anticipó lo que ocurrió años después en el país. El libro recoge artículos referidos al campo social y político, aunque su preocupación ha sido siempre el desarrollo integral del Perú, o la necesidad de implementar una reingeniería económica, política y social.</p>
                            </div>
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
                    <input type="email" class="form-control form-control-lg" placeholder="Email">
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
    </footer>

    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
    
    <!-- Todos los estilos -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <!-- Para calificar por estrellas -->
    <script>
        var contador;
        function calificar(item) {
            console.log(item);
            contador=item.id[0];
            let nombre = item.id.substring(1);
            for(let i=0; i<5; i++){
                if(i<contador){
                    document.getElementById((i+1)+nombre).style.color="orange";
                }
                else{
                    document.getElementById((i+1)+nombre).style.color="gray";
                }
            }    
        }
    </script>
</body>
</html>