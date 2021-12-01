
<?php
$crear=$_POST['crear'];
$nit=$_POST['nit'];
$id_productos=$_POST['id_productos'];


$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "insert into empresaproducto (cedula,id_productos)  VALUES ('$nit','$id_productos');";

if (isset($crear))
{
    
    if (mysqli_query($conexion, $sql))
    {
        echo"<script>alert('se inserto correctamente');window.location.href='../Empresa/pagina_principal.php';</script>";

    }
    else {  print "Error";
            $error=mysqli_error($conexion); 
            print "$error";
        }
}
$ejecutar = $conexion->query($sql);

?>