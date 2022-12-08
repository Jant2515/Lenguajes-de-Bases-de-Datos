<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\FacturasController.php';
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

        <!-- AGREGAR CITA NUEVA -->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light text-black" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <form action="" method="post" name="login">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">
                                            <h2 class="fw-bold mb-2 text-uppercase">Agregar Factura</h2>
                                        </h2>
                                        <p class="text-black-50 mb-5">Ingrese los datos necesarios</p>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Veterinaria</label>
                                            <input type="text" class="form-control" id="Veterinaria"
                                                name="Veterinaria" value="GUANAVET" readonly>
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="Telefono" name="Telefono"
                                                value="26669444" readonly></div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Nombre Cliente</label>
                                            <input type="text" class="form-control" id="NomCliente"
                                                name="NomCliente">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Nombre de la Mascota</label>
                                            <input type="text" class="form-control" id="NomMascota"
                                                name="NomMascota">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Subtotal</label>
                                            <input type="text" class="form-control" id="Subtotal"
                                                name="Subtotal">
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-lg px-5"
                                         id="agregarEmp" name="agregarEmp">Confirmar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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