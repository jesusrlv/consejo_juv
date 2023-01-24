<?php
session_start();

$usr = $_SESSION['usr'];
$perfil = $_SESSION['perfil'];

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="INJUVENTUD" content="Consejo Juvenil">
    <meta name="" content="">
    <link rel="icon" type="image/png" href="../../img/icon.ico" sizes="22x21">
    <title>Perfil Usuario | Consejo Juvenil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <!-- <script src="../../js/index.js"></script> -->

     <!-- type font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap" rel="stylesheet"> 
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-primary" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white"><img src="../../img/logo_injuventud_01.png" alt="" width="90"></h4>
          <p class="text-white">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="../../img/logo_injuventud_0.png" width="20" alt="" class="me-1">
        <strong>Consejo Juvenil 2023</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"><img src="../../img/logo_injuventud_01.png" alt="" width="360"></h1>
        <h2 class="fw-bold" style="color:#5a5557">Consejo Juvenil</h2>
        <h2 class="fw-light" style="color:#5a5557">2023</h2>
        <p class="lead text-muted">Sistema de postulación del INJUVENTUD para integrarse al Consejo Juvenil del Estado de Zacatecas en su edición 2023.</p>
        <p>
          <hr>
          <a href="#seccion_documentos" class="btn btn-primary my-2">Sección de documentos</a>
          <a href="#seccion_convocatoria" class="btn btn-secondary my-2">Sección convocatoria</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="mb-4">
        <p><span class="h2" id="seccion_convocatoria"><i class="bi bi-file-earmark-break"></i> Sección de convocatoria</span></p>
        <p><small>Información de<strong> datos personales</strong> y acerca de la convocatoria.</small></p>
      </div>
      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="col">
          <div class="card border-primary" style="height:300px">
            <div class="card-body">
              <h5 class="card-title">Datos del usuario</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="bi bi-exclamation-circle text-danger"></i> Obligatoria</h6>
              <p class="card-text">Debes tener a la mano los datos personales como: Nombre, Apellido(s), Domicilio, CURP, Municipio, Escolaridad, etcétera. Para poder llenar los documentos, debes completar de manera inicial esta sección</p>
            </div>
            <div class="card-footer">
              <a href="#" class="card-link" style="text-decoration: none"><i class="bi bi-eye"></i> Revisar</a>
              <a href="#" class="card-link" style="text-decoration: none"><i class="bi bi-pencil-square"></i> Editar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card border-primary" style="height:300px">
            <div class="card-body">
              <h5 class="card-title">Convocatoria</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="bi bi-exclamation-triangle-fill text-warning"></i> Convocatoria vigente</h6>
              <p class="card-text">Convocatoria vigente acerca de la postulación al Consejo Juvenil 2023.</p>
              
            </div>
            <div class="card-footer">
              <a href="#" class="card-link" style="text-decoration: none"><i class="bi bi-eye"></i> Revisar</a>
            </div>
          </div>
        </div>
        <? include('query/docs_contador.php'); ?>
        <!-- <div class="col">
          <div class="card border-primary" style="height:300px">
            <div class="card-body">
              <p><h5 class="card-title">Estatus del perfil</h5></p>
              <p><h6 class="card-subtitle mb-2 text-muted">Documentos cargados en el sistema</h6></p>
                <p class="card-text text-center display-1">0</p>
            </div>
          </div>
        </div> -->
        
      </div><!-- row -->
    </div>
  </div>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="mb-4">
        <p><span class="h2" id="seccion_documentos"><i class="bi bi-filetype-pdf"></i> Sección de carga de documentos</span></p>
        <p><small>Carga los documentos <strong>(formato PDF)</strong> para poder participar como postulante.</small></p>
      </div>
      
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       
        <? include('query/docs.php'); ?>

      </div><!-- row -->
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Arriba</a>
    </p>
    <p class="mb-1">&copy; Desarrollo por <strong class="text-dark">INJUVENTUD</strong></p>
    <p class="mb-0"><a href="/">Gobierno del estado de Zacatecas</a>.</p>
  </div>
</footer>


    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

<script>
    $("a[href^='#']").click(function(e) {
    e.preventDefault();
    
    var position = $($(this).attr("href")).offset().top;

    $("body, html").animate({
        scrollTop: position
    } /* speed */ );
});
</script>
