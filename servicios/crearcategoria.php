<?php
$crear=$_POST['crear'];
$id_categoria=$_POST['id_categoria'];
$nombre_categoria=$_POST['nombre_categoria'];



$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "insert into categoria (id_Categoria,nombre_Categoria)  VALUES ('$id_categoria','$nombre_categoria');";

if (isset($crear))
{
    
    if (mysqli_query($conexion, $sql))
    {
        echo"<script>alert('categoria creada');window.location.href='../administrador.php';</script>";

    }
    else {  print "Error";
            $error=mysqli_error($conexion); 
            print "$error";
        }
}
$ejecutar = $conexion->query($sql);

?>