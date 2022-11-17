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
          <h2> Nuestros Servicios </h2>
        </div>
        <!-- primera columna servicios -->
        <div class="row">
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/s1.png" alt="">
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
                <img src="images/s2.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Laboratorio Clinico
                </h5>
                <p>
                  Los análisis de sangre junto con un examen físico le permiten al veterinario determinar el 
                  tratamiento para su mascota. Los análisis de sangre incluyen un hemograma completo y un análisis
                  de los componentes químicos en la sangre de su mascota.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/pethotel.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Hotel
                </h5>
                <p>
                  Lugar donde las mascotas pueden quedarse y que sus dueños puedan confiar en que los animales 
                  estarán cuidados mientras llevan a cabo otra actividad, o están ausentes por trabajos, viajes, 
                  enfermedad o cualquier otra razón.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- segunda columna servicios -->
        <div class="row">
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/x-ray.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Rayos X
                </h5>
                <p>
                  Los rayos X son una forma de radiación, que pueden concentrarse en un haz, 
                  de modo muy similar al haz de una linterna. Sin embargo, a diferencia de un haz de luz, 
                  los rayos X pueden atravesar la mayoría de los objetos, incluido el cuerpo humano.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box ">
              <div class="img-box">
                <img src="images/veterinarian.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Ultrasonido
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
                <img src="images/saline.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Laparoscópica
                </h5>
                <p>
                  Castración de perros. La castración consiste en extirpar los testículos en el macho, y, normalmente, el útero, 
                  los ovarios y las trompas de Falopio en la hembra, 
                  si bien solo se extirpan los ovarios si se emplea cirugía laparoscópica.
                </p>
              </div>
            </div>
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