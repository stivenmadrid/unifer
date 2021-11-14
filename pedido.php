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
  
   $registros = mysqli_query($conexion, "UPDATE `pedido` SET `estado`='$_REQUEST[estadoproducto]' WHERE  `id_pedido`=4") or die("Problemas en el select:" . mysqli_error($conexion));

   if($registros){

    echo 'actualizado';
   }
    ?>
</body>

</html>