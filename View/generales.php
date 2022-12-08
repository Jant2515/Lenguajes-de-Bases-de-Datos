<?php

function linksIndex()
{
  echo '<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="View/images/favicon.png" type="image/x-icon">

  <title>GUANAVET</title>

  <link rel="stylesheet" type="text/css" href="View/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <link href="View/css/style.css" rel="stylesheet" />

  <link href="View/css/responsive.css" rel="stylesheet" />';
}

function navegadorIndex()
{
    echo '<header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="../index.php">
            <span>
              GUANAVET
            </span>
          </a>
          <div class="" id="">
            <div class="User_option">
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="/../index.php">Inicio</a>
                <a href="View/about.php">Acerca de</a>
                <a href="View/service.php">Servicios</a>
                <a href="View/contact.php">Contacto</a>
                <a href="View/MostrarTablas.php">Tablas</a>
                <a href="View/auditoria.php">Auditoria</a>
                
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>';
}

function footerIndex()
{

  echo '<section class="info_section layout_padding2">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Acerca De
            </h6>
            <p>
              GUANAVET 24/7 Hospitalización, Laboratorio clínico (Hematologia, Bioquímica Sanguínea) Rayos X, Ultrasonido, Cirugía 
              (Ortopedia, Laparoscopia), Grooming y HOTEL para mascotas.         
            </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Paginas
            </h6>
            <div class="info_link-box">
              <ul>
                <li class="active">
                  <a href="../index.php">
                    Inicio
                  </a>
                </li>
                <li>
                  <a href="View/about.php">
                    Acerca de
                  </a>
                </li>
                <li>
                  <a href="View/service.php">
                    Servicios
                  </a>
                </li>
                <li>
                  <a href="View/contact.php">
                    Contacto
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Direccion
            </h6>
            <div class="contact_items">
              <a href="https://goo.gl/maps/HJnHJB3XEFMbq3pc9">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Liberia, Guanacaste
                    </p>
                  </div>
                </div>
              </a>
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      +506 2666 9444
                    </p>
                  </div>
                </div>
              </a>
              <a href="mailto:guanavet@hotmail.com">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      guanavet@hotmail.com
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <div class="info_form ">
              <h5>
                Información
              </h5>
              <form action="#">
                <input type="email" placeholder="Ingrese su email">
                <br><br>
                <a class="btn btn-outline-light">Ingresar</a>
                
              </form>
              <div class="social_box">
                <a href="https://www.facebook.com/guanavet/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/guanavet/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info section -->
  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayDate"></span> GUANAVET, Liberia, Guanacaste
    </p>
  </footer>
  <!-- end  footer section -->
  <script src="View/js/jquery-3.4.1.min.js"></script>
  <script src="View/js/bootstrap.js"></script>';
}

function LinksOtros()
{
    echo '<!-- Basico -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <!-- Titulo -->
  <title>GUANAVET</title>
  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- CSS -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive -->
  <link href="css/responsive.css" rel="stylesheet" />';
}

function navegadorOtros()
{
    echo '<header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="../index.php">
          <span>
            GUANAVET
          </span>
        </a>
        <div class="" id="">
          <div class="User_option">
          </div>

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">
            <div class="overlay-content">
              <a href="../index.php">Inicio</a>
              <a href="about.php">Acerca de</a>
              <a href="service.php">Servicios</a>
              <a href="contact.php">Contacto</a>
              <a href="MostrarTablas.php">Tablas</a>
              <a href="auditoria.php">Auditoria</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>'; 
}

function footerOtros()
{
    echo '<section class="info_section layout_padding2">
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Acerca De
            </h6>
            <p>
              GUANAVET 24/7 Hospitalización, Laboratorio clínico (Hematologia, Bioquímica Sanguínea) Rayos X, Ultrasonido, Cirugía 
              (Ortopedia, Laparoscopia), Grooming y HOTEL para mascotas.         
            </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Paginas
            </h6>
            <div class="info_link-box">
              <ul>
                <li class="active">
                  <a href="../index.php">
                    Inicio
                  </a>
                </li>
                <li>
                  <a href="about.php">
                    Acerca de
                  </a>
                </li>
                <li>
                  <a href="service.php">
                    Servicios
                  </a>
                </li>
                <li>
                  <a href="contact.php">
                    Contacto
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h6>
              Direccion
            </h6>
            <div class="contact_items">
              <a href="https://goo.gl/maps/HJnHJB3XEFMbq3pc9">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      Liberia, Guanacaste
                    </p>
                  </div>
                </div>
              </a>
              <a href="">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      +506 2666 9444
                    </p>
                  </div>
                </div>
              </a>
              <a href="mailto:guanavet@hotmail.com">
                <div class="item ">
                  <div class="img-box ">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="detail-box">
                    <p>
                      guanavet@hotmail.com
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <div class="info_form ">
              <h5>
                Información
              </h5>
              <form action="#">
                <input type="email" placeholder="Ingrese su email">
                <br><br>
                <a class="btn btn-outline-light">Ingresar</a>
                
              </form>
              
              <div class="social_box">
                <a href="https://www.facebook.com/guanavet/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/guanavet/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="container-fluid footer_section ">
    <p>
      &copy; <span id="displayDate"></span> GUANAVET, Liberia, Guanacaste
    </p>
  </footer>'; /*
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>';*/
}
?>