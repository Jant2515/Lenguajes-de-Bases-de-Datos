<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\EmpleadoController.php';
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
        <!-- AGREGAR EMPLEADO -->
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-light text-black" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <form action="" method="post" name="login">
                                    <div class="mb-md-5 mt-md-4 pb-5">

                                        <h2 class="fw-bold mb-2 text-uppercase">
                                            <h2 class="fw-bold mb-2 text-uppercase">Agregar Empleado</h2>
                                        </h2>
                                        <p class="text-black-50 mb-5">Ingrese los datos necesarios</p>

                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Cedula</label>
                                            <input type="text" class="form-control" id="cedula_emp"
                                                name="cedula_emp">
                                        </div>

                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre_emp" name="nombre_emp">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Apellido</label>
                                            <input type="text" class="form-control" id="apellido_emp"
                                                name="apellido_emp">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="telefono_emp"
                                                name="telefono_emp">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="mail_emp"
                                                name="mail_emp">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Puesto</label>
                                            <input type="text" class="form-control" id="puesto_emp"
                                                name="puesto_emp">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Salario</label>
                                            <input type="text" class="form-control" id="salario_emp"
                                                name="salario_emp">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Provincia</label>
                                            <select class="form-control" id="id_provincia"
                                                name="id_provincia"><?php ListaProvincia($stmt["nombre_prov"]); ?></select>
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Canton</label>
                                            <select class="form-control" id="id_canton"
                                                name="id_canton"><?php ListaCanton($stmt["nombre_cant"]); ?></select>
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Distrito</label>
                                            <select class="form-control" id="id_distrito"
                                                name="id_distrito"><?php ListaDistrito($stmt["nombre_dist"]); ?></select>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-lg px-5"
                                            name="agregarEmp">Confirmar</button>
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