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

<body>
<div class="hero_area ">
    <div class="hero_bg_box">
      <img src="images/back.png" alt="">
    </div>
    <!-- header -->
    <?php
    navegadorOtros();
    ?>
    <!-- final header -->
    <!-- slider -->
    <section class="slider_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail-box">
              <h1>
                Clínica Veterinaria Guanavet <br>
                y hotel para mascotas.
              </h1>
              <p>
                De la parada municipal de Liberia, 100 metros al Norte . 50101 Liberia, Provincia de Guanacaste, Costa Rica
              </p>
              <a href="">
                Leer Más
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider -->
  </div>

  <div class="main_content">
    <div class="main_content_bg">
      <img src="../View/images/content-bg.jpg" alt="">
    </div>

    <!-- service -->
    <section class="service_section layout_padding">
      <div class="container py_mobile_45">
        <div class="heading_container heading_center">
          <h2> Nuestros Servicios </h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../View/images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Grooming
                </h5>
                <p>
                  Técnicas de peluquería destinadas a tener un perro o gato en buenas condiciones higiénico sanitarias 
                  y con un aspecto acorde con su raza. El grooming ayuda a evitar alguna condición como: problemas 
                  de piel, pérdida de pelo y parásitos.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../View/images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Hematología
                </h5>
                <p>
                 Examen sencillo y económico que aporta información muy valiosa, que unida a un examen físico y una buena anamnesis,
                 puede ser suficiente para llegar a un diagnóstico preciso e iniciar el tratamiento para recobrar la salud de tu 
                 mascota.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="../View/images/pethotel.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Hotel
                </h5>
                <p>
                  Lugar donde las mascotas pueden quedarse y que sus dueños puedan confiar en que los animales estarán cuidados 
                  mientras llevan a cabo otra actividad, o están ausentes por trabajos, viajes, enfermedad o cualquier otra razón.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a href="service.php">
            Ver Más
          </a>
        </div>
      </div>
    </section>

    <!-- end service section -->

    <!-- about section -->

    <section class="about_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/about-img.jpg" alt="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Acerca de
                </h2>
              </div>
              <p>
                GUANAVET 24/7 Hospitalización, Laboratorio clínico (Hematologia, Bioquímica Sanguínea) Rayos X, 
                Ultrasonido, Cirugía (Ortopedia, Laparoscopia), Grooming y HOTEL para mascotas.   
              </p>
              <a href="Cita.php">
                Obtener Cita
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

    <!-- care section -->

    <section class="care_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                El mejor cuidado para sus mascotas
                </h2>
              </div>
              <p>
                En GUANAVET contamos con excelentes profesionales para el cuidado adecuado de su mascota
              </p>
              <a href="contact.php"> Contactarse </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="images/care.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end care section -->

  </div>
  <!-- FOOTER -->
  <?php
    footerOtros();
    ?>
  <!-- End Google Map -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="View/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
</body>

</html>