<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Infoteca- inicio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">Infoteca</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
          
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead " >
            <div>
            <div class="Header">
  <div class="Header-background"></div>
  <div class="Header-content">
    <div class="Header-hero">

      <h1>Biblioteca Pública <br/>"Octavio Paz"</h1>
      <p>Colección #4530</p>
     
    </div>
    <section>
     <div class="Header-visuals">
        <div class="imagen "><img class="masthead-avatar mb-5" src="assets/img/logo.png"></div>


     
    </div>
</section>
  </div>
</div>
</div>

 <link rel="manifest" href="./manifest.json">       
</header>



      <br><br><br>

<div class=" container text-center " >
    
<h1  align="center" class="display-3 container" style="background-color: #8A979A;height: 60%;width: 60%;"> BIENVENIDO! </h1>

<div style="height: 60%;width: 60%;" class="container ">
   <br> 
<p align="justify-content-center"> Estas en la página principal de la Infoteca Pedro Ferriz Santa Cruz<br>
Puedes acceder a la diferentes funciones dando click en los íconos que se encuentran en la parte inferior</p>

<br>
</div>
</div>




</style>

      <!-- Section apartados  -->
 <section class="py-5">
              <div class=" px-4 px-lg-5 mt-5">

                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                    <div class="col mb-5">
                        <div class="card h-100" >
                           
                            <!-- Imagen de referencia-->
                            <a href="libros.php">
                            <img class="card-img-top " src="assets/img/ac.png"  alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                  <h5 class="fw-bolder">ACERVO DGB</h5>
                                  <p>Accede al acervo, busca, modifica o registra un nuevo libro. </p>
                                   
                                </div>
                            </div>
                            
                            </div>
                        </div>

                         <div class="col mb-5">
                        <div class="card h-100">
                           
                            <!-- Imagen de referencia-->
                            <a href="RegistroPrestamoLibros.php">
                            <img class="card-img-top " src="assets/img/prest.png"  alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">PRÉSTAMO DOMICILIO</h5>
                                    <p>Registra un nuevo préstamo, accede al historial o visualiza la lista de los préstamos. </p>
                              
                                 
                                </div>
                            </div>
                            
                            </div>
                        </div>

                         <div class="col mb-5">
                        <div class="card h-100">
                           
                            <!-- Imagen de referencia-->
                            <a href="k_Donaciones/index.php">
                            <img class="card-img-top" src="assets/img/zdon.png"  alt="..." />
                            </a>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">ACERVO DONACIONES</h5>
                                    <p>Accede a la sección de <b>Acervo donaciones</b> para visualizar los diferentes titulos, registrar préstamos,nuevos libros,etc.</p>
                              
                                </div>
                            </div>
                            
                            </div>
                        </div>


                   
                   
        </section>


<style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Varela+Round");
:root {
  --color-1: #696969;
  --color-2: #5F9EA0;
  --color-3: #778899;
  --color-4: #E6E6FA;
}



.Header {
  position: relative;
  height: 80vh;
  display: block;
}
.Header-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(19deg, var(--color-1), var(--color-2));
  transform-origin: 0px 0px;
  transform: skewY(-10deg);
  overflow: hidden;
  z-index: -1;
}
.Header-background::before,
.Header-background::after {
  display: block;
  position: absolute;
  content: '';
  width: 80%;
  height: 33.333333333333336%;
  opacity: 0.3;
  filter: blur(15px);
}
.Header-background::before {
  background: var(--color-1);
  right: 0;
}
.Header-background::after {
  background: var(--color-2);
  bottom: 0;
}
.Header-content {
  text-align: center;
  padding: 4rem 4rem;
  margin: 0 auto;
  
}
@media (min-width: 58rem) {
  .Header-content {
    text-align: center;
    padding: 10rem 4rem;
    max-width: 54rem;
    display: flex;
    justify-content: space-between;
  }
}
.Header-hero h1,
.Header-hero p {
  color: #fff;
  text-shadow: 0 0.5rem 1rem rgba(50,0,100,0.1);
}
.Header-hero h1 {
  margin: 0;
  font-size: 3rem;
}
.Header-hero p {
  font-size: 1.5rem;
  margin-bottom: 2rem;
}
.Header-visuals {
  position: relative;
  margin-top: 5rem;

}
@media (min-width: 58rem) {
  .Header-visuals {
    margin: 0;
    transform: translateY(-5rem) ;
  }
}

.imagen{
    align-items: right;
    
    margin-top: 2rem;
    padding-right: : 6rem 2rem;
    position: relative;
    height: 30%;
    width:  30%;
        

    
}
</style>



        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; infoteca 2023</small></div>
        </div>
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script>
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", function () {
          navigator.serviceWorker.register("/service-worker.js").then(
            function (registration) {
              console.log(
                "ServiceWorker registered with scope:",
                registration.scope
              );
            },
            function (err) {
              console.log("ServiceWorker registration failed:", err);
            }
          );
        });
      }
      function askNotificationPermission() {
        Notification.requestPermission().then((permission) => {
          if (permission === "granted") {
            console.log("Permiso para notificaciones concedido.");
          } else {
            console.log("Permiso para notificaciones denegado.");
          }
        });
      }

      askNotificationPermission();
    </script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

