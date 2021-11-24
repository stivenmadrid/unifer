<?php
session_start();
include ("db.php");
$codigo=$_SESSION['id_productos'];
if(isset ($_POST["GENERARPEDIDO"]))

{
    echo"<script>alert('COMPRA EXITOSA');window.location.href='pagina_principal.php';</script>";
    echo 'entro por comprar';
    echo "</br>";
    $id_pedido=rand (1,100000);
   
    echo '<h4>cantidad comprada:</h4>' .$_SESSION['cantidad'];
    echo "</br>";
    echo '<h4>metodo de pago :</h4>'.$_POST["mediopago"];
    echo "</br>";
    echo '<h4>direccion de la compra:</h4>'.$_POST["direccion"];
    echo "</br>";
    echo '<h4>departamento:</h4>'.$_POST['departamento'];
     
 $cantidad=$_SESSION['cantidad'];
 $direccion=$_POST['direccion'];


 $departamento=$_POST['departamento'];


 $ciudad=$_POST['ciudad'];

$mediopago=$_POST['mediopago'];

$cedula=$_POST['cedula'];

$id_productos=$_SESSION['id_productos'];




$sql = "INSERT INTO pedido (cantidad,direccion,departamento,ciudad,mediopago,cedula,id_productos,id_categoria)  VALUES (
  
    '$cantidad','$direccion','$departamento','$ciudad','$mediopago','$cedula','$id_productos','1');";
    $ejecutar = $conexion->query($sql);
}

$codigo=$_SESSION['id_productos'];
$sql = "select * from productos where id_productos=$codigo";
    $ejecutar = $conexion->query($sql);
    $fila = mysqli_fetch_object($ejecutar);
    $nombre_producto=$fila->nombre_producto;
    $precio=$fila->precio;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compra_cliente</title>
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/compracliente.css">

</head>
<body>

<br>
<br>
<div id="logo"> 
 
</div> 
<h1><i> DATOS DEL PEDIDO</i></h1>
<section class="stark-login">
  <div class=contenedor__cliente>
  
        <form action="compra.php" method="POST">
       
        <div id="fade-box">
      
            <label >  PRODUCTO :  <?php echo $_SESSION['id_productos']; ?></label>
            
            <BR>
              
            <BR>
            <label>  CANTIDAD: <?php echo $_SESSION['cantidad']; ?> </label>
            
              
            <BR>  
            <BR>
            <label >  PRECIO :</label>
            
              
            <BR>  
            <BR>

            <label >  INFORMACION PARA EL ENVIO: </label>
            
            DIRECCION: <input class="form-control form-control-user" type="text" name="direccion" >
             
            <BR>


            DEPARTAMENTO: <select class="form-control form-control-user" name="departamento" class="browser-default custom-select mb-4 " id=select1 required class="comprar">

            <option  value="" disabled="" selected=""> DEPARTAMENTOS </option>
            <option value="Antioquia" selected=""> Antioquia</option>
            <option value="cundinamarca" selected=""> cundinamarca</option>
            <option value="valle del cauca" selected=""> valle del cauca</option>
            <option value="cali" selected=""> elija del departamento</option>

            </select> 
            <br>
           

            MUNICIPIO: <select  name="ciudad" class="browser-default custom-select mb-4 " id=select1 required>

            <option value="" disabled="" selected="">elija el municipio </option>
            <option value="medellin" selected=""> Barbosa</option>
            <option value="bogota" selected=""> girardota</option>
            <option value="cali" selected=""> bello</option>
            <option value="cali" selected=""> betania</option>
            <option value="cali" selected=""> armenia</option>
            <option value="cali" selected=""> anori</option>
            <option value="cali" selected=""> Briceño</option>
            <option value="cali" selected=""> Caldas</option>
            <option value="cali" selected=""> campamento</option>
            <option value="cali" selected=""> elija el municipio</option>
           
            </select> 
            <br>
            <br>
            

            METODO PAGO:
            <br>
            <br>
            
            TRANSFERENCIA: <input type="radio" name="mediopago" value="transferencia" class="form-control form-control-user">
            CONTRA ENTREGA: <input type="radio" name="mediopago" value="entrega" class="form-control form-control-user">
            
            <br>
            CEDULA: <input class="form-control form-control-user" type="text" name="cedula" >
            <br>
            TOTAL COMPRA: <?php $total=$precio*$_SESSION['cantidad']; echo $total;  ?>
            <br>
            

            
            <input type="submit"  name="GENERARPEDIDO" value="GENERARPEDIDO" class="btn btn-primary btn-block btn-large">

        </form>
    <div>
</body>
</html>