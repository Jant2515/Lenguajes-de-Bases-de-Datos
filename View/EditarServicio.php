<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\ServiciosController.php';

include_once __DIR__ . '/../Model/ConnBD.php';

$conex = new Conexion(); 
$getConection= $conex-> Conectar(); 
 

$ci=$_GET['q']; 
$sql="select*from servicios where idservicio=$ci"; 
$stmt=$getConection-> prepare($sql);
 $stmt-> execute(); 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 
    $IDServicio=$row['idservicio']; 
   $NombreServicio=$row['nombre_serv']; 
   $DescripcionServicio=$row['descripcion_serv']; 
   $PrecioServicio=$row['precio_serv']; 

}

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
                                            <h2 class="fw-bold mb-2 text-uppercase">Editar Servicio</h2>
                                        </h2>
                                        <p class="text-black-50 mb-5">Ingrese los datos necesarios</p>
                                        <input type="hidden" value="<?php echo $IDServicio?>" id="idServicio" name="idServicio">
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Nombre del Servicio</label>
                                            <input type="text" class="form-control" id="nombreServicio" name="nombreServicio" 
                                            value="<?php echo $NombreServicio?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Descripcion</label>
                                            <input type="text" class="form-control" id="DescripcionServicio" name="DescripcionServicio"
                                            value="<?php echo $DescripcionServicio?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Precio</label>
                                            <input type="number" min = "1" class="form-control" id="PrecioServicio" name="PrecioServicio"
                                            value="<?php echo $PrecioServicio?>">
                                        </div></br></br>
                                        <button type="submit" class="btn btn-outline-info btn-lg px-5"
                                            name="editarServicio">Editar</button>
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