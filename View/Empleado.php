<?php

include_once __DIR__ . '\..\Controller\EmpleadoController.php';
include_once __DIR__ . '\generales.php';

?>

<!DOCTYPE html>

<head>
    <?php
    LinksOtros();
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <!-- end header section -->
    </div>

    <div class="main_content">
        <div class="main_content_bg">
        <img src="images/content-bg.jpg" alt="">
    </div>


    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">

            <div class="templatemo-panels">
            <h2 style="text-align: center; color: #116ebf;">Tabla de Empleados</h2>
                <div class="row">
                    <div class="col-md-12">
                        <table id="tbDatos" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Cedula</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Puesto</th>
                                    <th>Salario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                Empleadolista();
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-outline-info" href="AgregarEmpleado.php" type="button">Agregar un Empleado</a>
    </div>
    <br>
    <?php
    footerOtros();
    ?>
    <!-- End Google Map -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
</body>

</html>