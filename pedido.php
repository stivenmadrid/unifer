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
       $estado=$_POST['estado'];
    $view=mysqli_query($conexion, "update pedido   set estado='$_REQUEST[estado]' where estado='$estado'") or die("Problemas en el select:" . mysqli_error($conexion));
    
                          
        if($view) {
          header("location:../administrador.php");
        //  echo"se actualizo correctamente";
         
        } else
           echo"no se pudo actualizar";              
        
    
    ?>
</body>

</html>