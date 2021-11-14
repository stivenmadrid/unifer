
<?php

include('db.php'); 
$pedido="SELECT * FROM pedido";

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
                         <H2 ALIGN=CENTER> PEDIDOS </H1>
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
                            <tr>
<?php  

$resultado = mysqli_query($conexion,$pedido);


while($row=mysqli_fetch_assoc($resultado)){?>
                            <tr>
                                
                                    <td ><?php echo $row["id_pedido"]; ?> </td>
                                    <td> <?php echo $row["cantidad"]; ?> </td>
                                    <td><?php echo $row["direccion"]; ?>  </td>
                                    <td><?php echo $row["departamento"]; ?> </td>
                                    <td> <?php echo $row["ciudad"];?> </td>
                                    <td><?php echo $row["mediopago"]; ?>  </td>
                                    <td><?php echo $row["cedula"]; ?>  </td>
                                    <td><?php echo $row["id_productos"]; ?>  </td>
                                    <td><?php echo $row["id_categoria"]; ?>  </td>
                                    <td><?php echo $row["estado"]; ?>  </td>
                                
                                   

                      
                                    </tr> 
                           <?php } ?>       
                    </table>

                </div>          
               
     


</body>
</html>