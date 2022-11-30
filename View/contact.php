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
    <!-- contact section -->
    <section class="contact_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Solicitud de consulta
          </h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form_container">
              <form action="#">
                <div>
                  <input type="text" placeholder="Nombre Completo " />
                </div>
                <div>
                  <input type="email" placeholder="Email" />
                </div>
                <div>
                  <input type="text" placeholder="Numero de telefono" />
                </div>
                <div>
                  <input type="text" class="message-box" placeholder="Mensaje" />
                </div>
                <div class="d-flex ">
                  <button>
                    Enviar
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62741.65522536192!2d-85.47419153117082!3d10.629625419557266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f757d2a8a1c08e5%3A0xb2f8a494fb368393!2sProvincia%20de%20Guanacaste%2C%20Liberia!5e0!3m2!1ses!2scr!4v1668460073125!5m2!1ses!2scr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact section -->
  </div>
  <!-- info section -->
  <?php
  footerOtros();
  ?>
</body>

</html>