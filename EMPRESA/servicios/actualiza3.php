<?php
session_start();






?>
<html>

</head>
<title>Problema</title>

<head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "ferreteria") or
        die("Problemas con la conexión");
       // $var=;
    $view=mysqli_query($conexion, "update productos   set codigo='$_REQUEST[codigonuevo]',nombre_producto='$_REQUEST[nombrenuevo]',precio='$_REQUEST[precionuevo]',referencia='$_REQUEST[referencianuevo]' ,Imagen='$_REQUEST[imagennuevo]'  where id_productos='$_REQUEST[id_productoviejo]'") or die("Problemas en el select:" . mysqli_error($conexion));
    
                          
        if($view) {
          header("location:../administrador.php");
        //  echo"se actualizo correctamente";
         
        } else
           echo"no se pudo actualizar";              
        
    
    ?>
</body>

</html>