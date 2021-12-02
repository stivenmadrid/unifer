
<?php
session_start();
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from pedido";
$ejecutar = $conexion->query($sql);

// $sql3="select * from usuario";
// $ejecutar3=$conexion->query($sql3);
// $fila3 = mysqli_fetch_object($ejecutar3);
// if($fila3==emausu){


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultar-productos</title>

    <link rel="stylesheet" type="text/css" href="css/consultar.css">
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    
    
   
</head>

<body >
    
    
               <div CLASS="TABLA">
           
                    <table class="table table-dark"  class="table" class="table table-responsive table-striped"> 
                        
                        
                         <H2 ALIGN=CENTER> <a href="administrador.php" >PEDIDOS</a> </H2> 
                            <tr>
                               
                                    <td>ID PEDIDO</td>
                                    <td>CANTIDAD</td>
                                    <td>DIRECCION</td>
                                    <td>DEPARTAMENTO</td>
                                    <td>CIUDAD  </td>
                                    <td>MEDIO DE PAGO</td>
                                    <td>CEDULA</td>
                                    <td>ID PRODUCTO</td>
                                    <td>CATEGORIA</td>
                                    <td>ESTADO</td>
                                    <TD>AGREGAR ESTADO </TD>
                                    <td>ACTUALIZAR DATOS </TD>
                                  
                               
                            <tr>

                            <?php
        $usuario=$_SESSION['emausu'];
        
        $sql2="select p.id_pedido,p.cantidad,p.direccion,p.departamento,p.ciudad,p.mediopago,p.cedula,p.id_productos,p.id_categoria,p.estado,p.id_empresa_producto,u.emausu
         FROM pedido as p inner join empresaproducto as em 
         on p.id_empresa_producto=em.id_empresa_producto 
         inner join usuario as u 
         on u.cedula=u.cedula where u.emausu='$usuario'";

  
        
        $ejecutar = $conexion->query($sql2);
            while ($fila3 = mysqli_fetch_object($ejecutar))
            {

         $sql2=" select * from pedido where id_pedido='$fila3->id_pedido'";
          $ejecutar3=$conexion->query($sql2);
          $fila = mysqli_fetch_object($ejecutar3);
        
          
              
    
               
                echo '<tr >'; 
               
                
                echo '<td>'.$fila->id_pedido.'</td>';
                echo '<td>'.$fila->cantidad.'</td>';
                echo '<td>'.$fila->direccion.'</td>';
                echo '<td>'.$fila->ciudad.'</td>';
                echo '<td>'.$fila->mediopago.'</td>';
                echo '<td>'.$fila->cedula.'</td>';
                echo '<td>'.$fila->id_productos.'</td>';
                echo '<td>'.$fila->id_categoria.'</td>';
                echo '<td>'.$fila->estado.'</td>';
            
             
                
            }
        ?>
     


</body>
</html>