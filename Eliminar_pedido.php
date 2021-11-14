<?php
session_start();






?>
<html>

</head>
<title>Problema</title>

<head>

<body>
    <?php
   include('db.php');
   $registros = mysqli_query($conexion, "DELETE FROM `pedido`  WHERE  id_pedido=$_REQUEST[id_pedidos]") or die("Problemas en el select:" . mysqli_error($conexion));

   if($registros){

    echo"<script>alert('PEDIDO ELIMINADO');window.location.href='consultar.php';</script>";
   }
    ?>
</body>

</html>