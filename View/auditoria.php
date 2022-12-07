<?php
include_once __DIR__ . '\generales.php';
?>

<!DOCTYPE html>
<html>

<head>
  <?php
  LinksOtros();
  ?>
</head>

<body class="sub_page">
  <div class="hero_area ">
    <div class="hero_bg_box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <?php
    navegadorOtros();
    ?>
    <!-- end header section -->
  </div>

  <div class="main_content">
    <div class="main_content_bgg">
      <img src="" alt="">
    </div>
    <h1 class="auditoria-title">Auditorias</h1>
    <div class="botones">
    <br>
    <!-- Columna de botones inicio -->
      <div class="col-md-12">

        <div class="row form-group">
          <div class="col-md-3 margin-bottom-15">
          <label>Consultar las mascotas que recibieron un Hemograma</label>
          </div>

          <div class="col-md-3 margin-bottom-15">
            <a href="ConsultaHemograma.php" type="button" class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              Consultar </a>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <a href="ConsultaGrooming.php" type="button" class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              Consultar </a>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <label>Consultar las mascotas que recibieron un Grooming</label>
          </div>
        </div>

      </div>
      <!-- Columna de botones fin -->
      <!-- Columna de botones inicio -->
      <div class="col-md-12">

        <div class="row form-group">
          <div class="col-md-3 margin-bottom-15">
          <label>Consultar los empleados que son Enfermeros</label>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <a href="ConsultaEnfermeros.php" type="button" class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              Consultar </a>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <a href="ConsultaPorDoctor.php" type="button" class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              Consultar </a>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <label>Consultar las mascotas atendidas con su respectivo Doctor</label>
          </div>
        </div>

      </div>
      <!-- Columna de botones fin -->
      <!-- Columna de botones inicio -->
      <div class="col-md-12">

        <div class="row form-group">
          <div class="col-md-3 margin-bottom-15">
          <label>Consultar la totalidad de facturas emitidas</label>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <a href="ConsultaTotalidad.php" type="button" class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              Consultar </a>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <a href="ConsultaAltas.php" type="button" class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              Consultar </a>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <label>Consultar las facturas superiores a ₡20000</label>
          </div>
        </div>

      </div>
      <!-- Columna de botones fin -->
      <!-- Columna de botones inicio -->
      <div class="col-md-12">

        <div class="row form-group">
          <div class="col-md-3 margin-bottom-15">
          <label>Consultar las acciones realizadas sobre la tabla Citas</label>
          </div>

          <div class="col-md-3 margin-bottom-15">
          <a href="ConsultaAuCitas.php" type="button" class="btn btn-outline-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
              Consultar </a>
          </div>

          <div class="col-md-3 margin-bottom-15">
          
          </div>

          <div class="col-md-3 margin-bottom-15">
          
          </div>
        </div>

      </div>
      <!-- Columna de botones fin -->
    </div>
    <br><br>
    <!-- info section -->
    <?php
    footerOtros();
    ?>
    <!-- End Google Map -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
</body>

</html>