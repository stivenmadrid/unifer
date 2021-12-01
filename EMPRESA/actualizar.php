<?php

$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);

// $sql3="select * from usuario";
// $ejecutar3=$conexion->query($sql3);
// $fila3 = mysqli_fetch_object($ejecutar3);
// if($fila3==emausu){




// }

?>




<body background=pink>

<link rel="stylesheet" type="text/css" href="css/styles_categoriaconstruccion.css">
<link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    <main class="separarproductos">
          <div class="contenedor__productostabla">    
          <table>
     
            
        
      <tr>
               <td>Nombre Empresa </td>
                <td>id </td>
                <td> codigo </td>
                <td>Nombre producto </td>
                <td> Precio </td>
                <td> Referencia </td>
                <td> Imagen </td>
                <td> cantidad </td>

          
               
                
            
            </tr>

            <h1 align="center"><b> BIENVENIDOS A SU TIENDA UNIFER</b> </h1>

   
        <?php
        $usuario=$_SESSION['emausu'];
        $sql2="select e.id_productos, u.empresa, u.emausu
        FROM empresaproducto as e inner join usuario as u 
        on e.cedula=u.cedula where u.emausu='$usuario'";


        
        $ejecutar = $conexion->query($sql2);
            while ($fila3 = mysqli_fetch_object($ejecutar))
            {

                $sql3=" select * from productos where id_productos='$fila3->id_productos'";
          $ejecutar3=$conexion->query($sql3);
          $fila = mysqli_fetch_object($ejecutar3);
          $empresa=$fila3->empresa;
              
    
               
                echo '<tr >'; 
               
                echo '<td>'.$empresa.'</td>';
                echo '<td>'.$fila->id_productos.'</td>';
                echo '<td>'.$fila->codigo.'</td>';
                echo '<td>'.$fila->nombre_producto.'</td>';
                echo '<td>'.$fila->precio.'</td>';
                echo '<td>'.$fila->referencia.'</td>';
                echo '<td ><img src="imagen/' .$fila->imagen.'" width="300" height="150"></td>';
            echo '<td> <form action="actualiza.php" method="POST"> 
           <input type="hidden" name="id_productos" value="'.$fila->id_productos.'">
             <input type="submit" value="Actualizar" class="btn btn-primary btn-block btn-large">
             </form>
             </td>';
            echo '<td> 
            
             </form><br>
             <form action="Eliminar3.php" method="POST" onC> 
             <input type="hidden" name="id_producto" value="'.$fila->id_productos.'">
             <input type="submit" value="Eliminar"   onclick="pedido()" class="btn btn-primary btn-block btn-large">   
             </form><br> 
            
             
             </td>';
                echo '</tr>';
               
            }
        ?></body>
        </table>