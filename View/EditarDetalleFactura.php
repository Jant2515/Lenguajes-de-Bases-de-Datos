<?php
include_once __DIR__ . '/generales.php';
include_once __DIR__ . '\..\Controller\DetalleFacturaController.php';

include_once __DIR__ . '/../Model/ConnBD.php';

$conex = new Conexion(); 
$getConection= $conex-> Conectar(); 
 

$ci=$_GET['q']; 
$sql="select*from detallefactura where iddetalle_factura=$ci"; 
$stmt=$getConection-> prepare($sql);
 $stmt-> execute(); 
 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 
    $NombreVetDet=$row['iddetalle_factura']; 
   $TelVetDet=$row['telefono_vet_det']; 
   $NombreCliDet=$row['nombre_cliente_det']; 
   $NombreMascDet=$row['nombre_mascota_det']; 
   $DescripcionDet=$row['descripcion_det']; 
   $SubtotalDet=$row['subtotal_det']; 
   $DescuentoDet=$row['descuento_det']; 
   $IvaDet=$row['iva_det']; 
   $TotalDet=$row['total_det'];
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
        <form>
            <br><br><br><br><br><br>
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                    <input type="hidden" value="<?php echo $idcita?>" id="idDet" name="idDet">
                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Veterinaria</label>
                        <input value="Guanavet" type="text" class="form-control" id="txtVeterinaria" 
                        name="txtVeterinaria" autocomplete="off" value="<?php echo $NombreVetDet?>" required readonly>
                    </div>
                    <div class="col-md-4 margin-bottom-15">
                    <label class="control-label">Telefono</label>
                        <input value="26669444" type="text" class="form-control" id="txtTelefono" 
                        name="txtTelefono" autocomplete="off" value="<?php echo $TelVetDet?>" required readonly>
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Nombre del Cliente</label>
                        <input type="text" class="form-control" id="txtNomCliente" name="txtNomCliente" 
                        value="<?php echo $NombreCliDet?>" autocomplete="off" required>
                    </div>
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Nombre de la Mascota</label>
                        <input type="text" class="form-control" id="txtNomMascota" name="txtNomMascota" 
                        value="<?php echo $NombreMascDet?>" autocomplete="off" required>
                        </select>
                    </div>
                    <div class="col-md-4 margin-bottom-15">
                        <label class="control-label">Descripcion</label>
                        <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" 
                        value="<?php echo $DescripcionDet?>" autocomplete="off" required>
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Subtotal</label>
                        <input type="number" class="form-control" id="txtSubtotal" name="txtSubtotal" 
                        value="<?php echo $SubtotalDet?>" autocomplete="off" required>
                    </div>
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Descuento</label>
                        <input type="number" class="form-control" id="txtDescuento" name="txtDescuento" 
                        value="<?php echo $DescuentoDet?>" autocomplete="off" required>
                    </div>
                    <div class="col-md-4 margin-bottom-15">
                        <label class="control-label">Iva</label>
                        <input type="number" class="form-control" id="txtIva" name="txtIva" autocomplete="off" 
                        value="<?php echo $IvaDet?>" required>
                    </div>
                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Total</label>
                        <input type="number" class="form-control" id="txtTotal" name="txtTotal" autocomplete="off" 
                        value="<?php echo $TotalDet?>" required>
                    </div>
                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-8 margin-bottom-15">
                </div>
                <div class="col-md-3 margin-bottom-15">
                    <input type="submit" value="Guardar" class="btn btn-success" id="btnEditar" name="btnEditar" autocomplete="off" required>
                    <br>
                    <input type="submit" value="Cancelar" class="btn btn-info" id="btnCancelar" name="btnCancelar" autocomplete="off" required>
                </div>
                <div class="col-md-1 margin-bottom-15">
                </div>
            </div>
        </form>
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