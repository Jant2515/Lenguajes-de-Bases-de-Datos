<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\EmpleadoController.php';

include_once __DIR__ . '/../Model/ConnBD.php';

$conex = new Conexion(); 
$getConection= $conex-> Conectar(); 
 

$ci=$_GET['q']; 
$sql="select*from empleados where idempleado=$ci"; 
$stmt=$getConection-> prepare($sql);
 $stmt-> execute(); 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 
    $IdEmp=$row['idempleado']; 
   $NombreEmp=$row['cedulaemp']; 
   $ApellidoEmp=$row['nombreemp']; 
   $TelefonoEmp=$row['apellidoemp']; 
   $CedulaEmp=$row['telefonoemp']; 
   $EmailEmp=$row['emailemp']; 
   $PuestoEmp=$row['puestoemp']; 
   $SalarioEmp=$row['salarioemp']; 

}

//50.24 min


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
                                            <h2 class="fw-bold mb-2 text-uppercase">Editar Empleado</h2>
                                        </h2>
                                        <p class="text-black-50 mb-5">Edite los datos necesarios</p>
                                        <input type="hidden" value="<?php echo $IdEmp?>" id="id_emp" name="id_emp">
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Cedula</label>
                                            <input type="text" class="form-control" id="cedula_emp"
                                                name="cedula_emp"
                                                value="<?php echo $NombreEmp?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre_emp" name="nombre_emp"
                                            value="<?php echo $ApellidoEmp?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Apellido</label>
                                            <input type="text" class="form-control" id="apellido_emp"
                                                name="apellido_emp"
                                                value="<?php echo $TelefonoEmp?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Telefono</label>
                                            <input type="text" class="form-control" id="telefono_emp"
                                                name="telefono_emp"
                                                value="<?php echo $CedulaEmp?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="mail_emp"
                                                name="mail_emp"
                                                value="<?php echo $EmailEmp?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Puesto</label>
                                            <input type="text" class="form-control" id="puesto_emp"
                                                name="puesto_emp"
                                                value="<?php echo $PuestoEmp?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Salario</label>
                                            <input type="text" class="form-control" id="salario_emp"
                                                name="salario_emp"
                                                value="<?php echo $SalarioEmp?>">
                                        </div>
                                        
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-lg px-5"
                                            name="btnConfirmar">Confirmar</button>
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