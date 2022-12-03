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

        <!-- AGREGAR CITA NUEVA -->
        <form>
            <br><br><br><br><br><br>
            <div class="col-md-12">

                <div class="row form-group">
                    <div class="col-md-1 margin-bottom-15">
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Veterinaria</label>
                        <input value="Guanavet" type="text" class="form-control" id="txtVeterinaria" name="txtVeterinaria" autocomplete="off" required disabled>
                    </div>

                    <div class="col-md-4 margin-bottom-15">
                    <label class="control-label">Telefono</label>
                        <input value="26669444" type="text" class="form-control" id="txtTelefono" name="txtTelefono" autocomplete="off" required disabled>
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Nombre del Cliente</label>
                        <input type="text" class="form-control" id="txtNomCliente" name="txtNomCliente" autocomplete="off" required>
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
                        <input type="text" class="form-control" id="txtNomMascota" name="txtNomMascota" autocomplete="off" required>
                        </select>
                    </div>

                    <div class="col-md-4 margin-bottom-15">
                        <label class="control-label">Descripcion</label>
                        <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" autocomplete="off" required>
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Subtotal</label>
                        <input type="number" class="form-control" id="txtSubtotal" name="txtSubtotal" autocomplete="off" required>
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
                        <input type="number" class="form-control" id="txtDescuento" name="txtDescuento" autocomplete="off" required>
                        </select>
                    </div>

                    <div class="col-md-4 margin-bottom-15">
                        <label class="control-label">Iva</label>
                        <input type="number" class="form-control" id="txtIva" name="txtIva" autocomplete="off" required>
                    </div>

                    <div class="col-md-3 margin-bottom-15">
                        <label class="control-label">Total</label>
                        <input type="number" class="form-control" id="txtTotal" name="txtTotal" autocomplete="off" required>
                    </div>

                    <div class="col-md-1 margin-bottom-15">
                    </div>
                </div>

            </div>


            <div class="col-md-12">
                <div class="col-md-8 margin-bottom-15">
                </div>
                <div class="col-md-3 margin-bottom-15">

                    <input type="submit" value="Guardar" class="btn btn-success" id="btnGuardar" name="btnGuardar" autocomplete="off" required>
                    <br>
                    <input type="submit" value="Cancelar" class="btn btn-info" id="btnCancelar" name="btnCancelar" autocomplete="off" required>

                </div>
                <div class="col-md-1 margin-bottom-15">
                </div>
            </div>
        </form>
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