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

    <!-- about section -->

    <section class="about_section layout_padding">
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
                Somos una veterinaria especializada en distintos tratos para sus mascotas.
                GUANAVET 24/7 Hospitalización, Laboratorio clínico (Hematologia, Bioquímica Sanguínea) Rayos X, Ultrasonido, Cirugía (Ortopedia, Laparoscopia), Grooming y HOTEL para mascotas.
              </p>
              <a href="">
                Leer más
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end about section -->

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