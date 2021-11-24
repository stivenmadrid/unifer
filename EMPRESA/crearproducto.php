<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
  
    <link rel="stylesheet" type="text/css" href="css/nuevacategoria.css">
    <link rel="stylesheet" type="text/css" href="css/styles_crearproducto.css">
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
   
</head>

</form>

<body>

<?php include("paginapro.php")?>

    <div class="nuevacategoria" >

        <form action="servicios/crearcategoria.php" method="POST">
            <div id="logo"> 
 
            </div> 
            <h1 ALIGN="CENTER"><i> NUEVA CATEGORIA</i></h1><BR><BR><BR>
            <section class="stark-login">
            <div class=contenedor__cliente>
            
            <INPUT TYPE="text" NAME="id_categoria" placeholder="Id Categoria " class="form-control form-control-user"><br>
            <INPUT TYPE="text" NAME="nombre_categoria" placeholder="Nombre Categoria "class="form-control form-control-user"><br>
                        
                        <INPUT TYPE="submit" NAME="crear" VALUE="crear" class="btn btn-primary btn-block btn-large" >



        </fom>


    </div>


 
    <div class="contenedor__producto">

          <form ACTION="crearproducto.php" METHOD="POST">
          <h1 ALIGN="CENTER"><i> NUEVO PRODUCTO</i></h1><BR><BR><BR>
                          
                                <BR>
                            CODIGO DEL PRODUCTO:  <INPUT TYPE="text" NAME="codigo" class="form-control form-control-user"><br>
                            NOMBRE DEL PRODUCTO:          <INPUT TYPE="text" NAME="nombre_producto" class="form-control form-control-user"><br>
                                 PRECIO:                      <INPUT TYPE="text" NAME="precio" class="form-control form-control-user"><br>
                            REFERENCIA:                  <INPUT TYPE="text" NAME="referencia" class="form-control form-control-user"><br>
                            IMAGEN:                      <INPUT TYPE="text" NAME="imagen" class="form-control form-control-user"><br>
                            INGRESA LA CATEGORIA:        <INPUT TYPE="text" NAME="productos_id_categoria" class="form-control form-control-user"><br>
                        
                           <INPUT TYPE="submit" NAME="crear" VALUE="crear" class="btn btn-primary btn-block btn-large" >


                          

        </form>

       

       
    <div>
    
 
</body>
</html>
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
        echo"<script>alert('se inserto correctamente');window.location.href='administrador.php';</script>";

    }
    else {  print "Error";
            $error=mysqli_error($conexion); 
            print "$error";
        }
}
$ejecutar = $conexion->query($sql);

?>