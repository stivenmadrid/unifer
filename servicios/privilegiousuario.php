<?php
session_start();






?>
<html>

</head>
<title>Problema</title>

<head>

<body>
    <?php
   include('../db.php');
   $registros = mysqli_query($conexion, "UPDATE `usuario` SET `id_rol`='$_REQUEST[privilegio_rol]' WHERE  cedula=$_REQUEST[cedu]") or die("Problemas en el select:" . mysqli_error($conexion));

   if($registros){

    echo"<script>alert('privilegio de usuario actualizado');window.location.href='../privilegiousuarios.php';</script>";
   }
    ?>
</body>

</html>