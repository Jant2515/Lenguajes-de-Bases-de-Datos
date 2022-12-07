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
    <div class="main_content_bg">
      <img src="images/content-bg.jpg" alt="">
    </div>

    <!-- service -->
    <section class="service_section layout_padding">
      <div class="container py_mobile_45">
        <div class="heading_container heading_center">
          <h2> Tablas Disponibles </h2>
        </div>
        <!-- primera columna servicios -->
        <div class="row">
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/baseD.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Empleados
                </h5>
                <p>
                  Muestra los empleados de la Veterinaria
                </p>
                <br>
                <a class="btn btn-outline-info" href="Empleado.php" type="button">Mostrar Empleado</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/baseD.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Clientes
                </h5>
                <p>
                  Muestra los clientes de la Veterinaria
                </p>
                <br>
                <a class="btn btn-outline-info" href="Cliente.php" type="button">Mostrar Cliente</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/baseD.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Mascotas
                </h5>
                <p>
                  Muestra las mascotas de la Veterinaria
                </p>
                <br>
                <a class="btn btn-outline-info" href="Mascota.php" type="button">Mostrar Mascota</a>
              </div>
            </div>
          </div>
        </div>
        <!-- segunda columna servicios -->
        <div class="row">
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/baseD.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Citas
                </h5>
                <p>
                  Muestra las citas de la Veterinaria
                </p>
                <br>
                <a class="btn btn-outline-info" href="Cita.php" type="button">Mostrar Cita</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/baseD.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Servicios
                </h5>
                <p>
                  Muestra los servicios de la Veterinaria
                </p>
                <br>
                <a class="btn btn-outline-info" href="Servicios.php" type="button">Mostrar Servicios</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/baseD.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Factura
                </h5>
                <p>
                  Muestra las facturas de la Veterinaria
                </p>
                <br>
                <a class="btn btn-outline-info" href="Factura.php" type="button">Mostrar Factura</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/baseD.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Detalle Factura
                </h5>
                <p>
                  Muestra los detalles de las facturas de la Veterinaria
                </p>
                <br>
                <a class="btn btn-outline-info" href="DetalleFactura.php" type="button">Mostrar Detalles Factura</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </section>
    <!-- end service section -->
  </div>

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