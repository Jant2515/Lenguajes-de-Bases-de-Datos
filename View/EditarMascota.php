<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\MascotasController.php';
include_once __DIR__ . '/../Model/ConnBD.php';
$conex = new Conexion(); 
$getConection= $conex-> Conectar(); 
$ci=$_GET['id']; 
$sql="select*from mascota where idmascota=$ci"; 
$stmt=$getConection-> prepare($sql);
 $stmt-> execute(); 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 
    $IDMas=$row['idmascota']; 
    $NomMas=$row['nombre_masc'];
    $EdadMas=$row['edad_masc'];
    $PesoMas=$row['peso_masc'];
    $razamasc=$row['raza_masc'];
   $GeneroMas=$row['genero_masc']; 
   $TallaMas=$row['talla_masc'];
   $EsterilizadoMas=$row['esterelizado_masc']; 
   $PedigreeMas=$row['pedigree_masc']; 
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
                                            <h2 class="fw-bold mb-2 text-uppercase">Editar Macota</h2>
                                        </h2>
                                        <p class="text-black-50 mb-5">Edite los datos necesarios</p>
                                        <input type="hidden" value="<?php echo $IDMas?>" id="id_masc" name="id_masc">
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputEmail4" class="form-label">Nombre Mascota</label>
                                            <input type="text" class="form-control" id="nombre_masc" name="nombre_masc"
                                            value="<?php echo $NomMas?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Raza</label>
                                            <input type="text" class="form-control" id="raza"
                                                name="raza"
                                                value="<?php echo $razamasc?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Edad</label>
                                            <input type="number" class="form-control" id="edad"
                                                name="edad"
                                                value="<?php echo $EdadMas?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Peso</label>
                                            <input type="number" class="form-control" id="peso"
                                                name="peso"
                                                value="<?php echo $PesoMas?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Talla</label>
                                            <input type="text" class="form-control" id="talla"
                                                name="talla"
                                                value="<?php echo $TallaMas?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Genero</label>
                                            <input type="text" class="form-control" id="genero"
                                                name="genero"
                                                value="<?php echo $GeneroMas?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Esterilizado</label>
                                            <input type="text" class="form-control" id="esterelizacion"
                                                name="esterelizacion"
                                                value="<?php echo $EsterilizadoMas?>">
                                        </div>
                                        <div class="form-outline form-white  mb-4">
                                            <label for="inputPassword4" class="form-label">Pedigree</label>
                                            <input type="text" class="form-control" id="pedigree"
                                                name="pedigree"
                                                value="<?php echo $PedigreeMas?>">
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
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br>
        <br><br>
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