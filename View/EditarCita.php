<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\MascotasController.php';
?>

<!DOCTYPE html>

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

        <!-- Editar CITA NUEVA -->

        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light text-black" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <form action="" method="post" name="login">
                                    <div class="mb-md-5 mt-md-4 pb-5">

                                        <h2 class="fw-bold mb-2 text-uppercase">
                                            <h2 class="fw-bold mb-2 text-uppercase">Editar de Cita</h2>
                                        </h2>
                                        <p class="text-black-50 mb-5">Edite los datos necesarios</p>
                                        <input type="hidden" value="<?php echo $datos["IDCITA"] ?>" id="idCita" name="idCita">

                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Servicio</label>
                                            <input type="text" class="form-control" id="serviciocita" name="serviciocita" 
                                            value="<?php echo $datos["SERVICIO_CITA"] ?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Fecha</label>
                                            <input type="date" class="form-control" id="fechacita" name="fechacita"
                                            value="<?php echo $datos["FECHA_CITA"] ?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Hora</label>
                                            <input type="time" class="form-control" id="horacita" name="horacita"
                                            value="<?php echo $datos["HORA_CITA"] ?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="telcita" name="telcita"
                                            value="<?php echo $datos["TELEFONO_CITA"] ?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Nombre de la Mascota</label>
                                            <input type="text" class="form-control" id="mascotacita" name="mascotacita"
                                            value="<?php echo $datos["NOMBRE_MASCOTA_CITA"] ?>">
                                        </div>

                                        <button type="submit" class="btn btn-outline-info btn-lg px-5"
                                            name="editarCita">Editar</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
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