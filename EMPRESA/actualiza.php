<?php
session_start();
include ("db.php");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/styles_actualizas.css">
    <?php
include ("db.php");
$conexion = mysqli_connect("localhost", "root", "", "ferreteria") or
    die("Problemas con la conexión");
//$var=$_REQUEST["id_producto"];
    $registros = mysqli_query($conexion, "select * from productos
    where id_productos='$_REQUEST[id_productos]'") or
die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
 

    ?>

<body>



           
            <?php include("paginapro.php")?>   
                <div class="contenedoractuali">
                    <H2>ACTUALIZAR PRUDUCTO</H2>
                    <br>
                    <br>
                    <form action="servicios/actualiza3.php" method="post">
                    Ingrese nuevo codigo:
                        <input type="text" name="codigonuevo" value="<?php echo $reg['codigo'] ?>" class="form-control form-control-user">
                        <br>
                    nombre
                        <br>
                        <input type="text" name="nombrenuevo" value="<?php echo $reg['nombre_producto'] ?>" class="form-control form-control-user">
                        <br>
                    precio
                        <br>
                        <input type="text" name="precionuevo" value="<?php echo $reg['precio'] ?>" class="form-control form-control-user">
                        <br>
                    referencia
                        <br>
                        <input type="text" name="referencianuevo" value="<?php echo $reg['referencia'] ?>" class="form-control form-control-user">
                        <br><br>
                    imagen
                        <br>
                        <input type="text" name="imagennuevo" value="<?php echo $reg['imagen'] ?>" class="form-control form-control-user">
                        <br>
                        <input type="hidden" name="id_productoviejo" value="<?php echo $reg['id_productos'] ?>" class="form-control form-control-user">
                        <br>
                        
         
         
         
                        <input type="submit" value="Modificar" class="form-control form-control-user">
                        </form>
                </div>       

                         
                                            
    <?php

  } else
    echo "No existe EL PRODUCTO con dicho ID";
  ?>

   
    <script src="js/script.js"></script>
</body>

</html>