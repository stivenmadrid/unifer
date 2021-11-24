
<?php

include('db.php'); 
$usuario="SELECT * FROM usuario";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>privilegios- usuario</title>

    <link rel="stylesheet" type="text/css" href="css/consultar.css">
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    
    
   
</head>

<body >
    
    
               <div CLASS="TABLA">
           
                    <table class="table table-dark"  class="table" class="table table-responsive table-striped"> 
                        
                        
                         <H2 ALIGN=CENTER> <a href="administrador.php" >PRIVILEGIO USUARIOS</a> </H2> 
                            <tr>
                               
                                    <td>NIT</td>
                                    <td>NOMBRE USUARIO</td>
                                    <td>DIRECCION</td>
                                    <td>CORREO</td>
                                    <td>TELEFONO  </td>
                                    <td>CONTRASEÑA</td>
                                    <td>ROL</td>
                                    <td>CONFIRMAR NIT</td>
                                    <td>NOMBRE EMPRESA</td>
                                    <td> PRIVILEGIO ROL </td>
                                    <td> INHABILITAR USUARIO </td>
                                    
                               
                        </div>     <tr>
<?php  

$resultado = mysqli_query($conexion,$usuario);


while($row=mysqli_fetch_assoc($resultado)){?>
                            <tr>
                                    
                                    <td ><?php echo $row["cedula"]; ?> </td>
                                    <td> <?php echo $row["nomusu"]; ?> </td>
                                    <td><?php echo $row["apeusu"]; ?>  </td>
                                    <td><?php echo $row["emausu"]; ?> </td>
                                    <td> <?php echo $row["telusu"];?> </td>
                                    <td><?php echo $row["pasusu"]; ?>  </td>
                                    <td><?php echo $row["id_rol"]; ?>  </td>
                                    <td><?php echo $row["Nit"]; ?>  </td>
                                    <td><?php echo $row["empresa"]; ?>  </td>
                                   
                                    
                                    <td> <form action="privilegiousuario.php" method="POST">
                                    <input type="text" name="privilegio_rol"> <br>
                                    <input type="hidden" name="cedu" value=" <?php echo $row['cedula']?>"> 
                                    <input type="submit" value="Guardar"  class="btn btn-primary btn-block btn-sm">
                                    </form>
                                  
                                    </td>
                                    <td>  <form action="Eliminar_pedido.php" method="POST" > 
                                        <input type="hidden" name="cedu" value="<?php echo $row['cedula']?>">
                                        <input type="submit" value="Eliminar"  class="btn btn-primary btn-block btn-large">  
                                    </form>
                                    <td>
                                    
                                 
                      
                                    </tr> 
                           <?php } ?>       
                    </table>

                   
                </div>          
               
     


</body>
</html>