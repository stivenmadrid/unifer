
<?php
$crear=$_POST['crear'];
$codigo=$_POST['codigo'];
$nombre_producto=$_POST['nombre_producto'];
$precio=$_POST['precio'];
$referencia=$_POST['referencia'];
$imagen=$_POST['imagen'];
$productos_id_categoria=$_POST['productos_id_categoria'];


$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "insert into productos (codigo,nombre_producto,precio, referencia,Imagen,productos_id_categoria)  VALUES ('$codigo','$nombre_producto','$precio','$referencia','$imagen','$productos_id_categoria');";


if (isset($crear))
{
    
    if (mysqli_query($conexion, $sql))
    {
        echo"<script>alert('se inserto correctamente');window.location.href='../pagina_principal.php';</script>";

    }
    else {  print "Error";
            $error=mysqli_error($conexion); 
            print "$error";
        }
}
$ejecutar = $conexion->query($sql);

?>