<?php
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);

?>




<body background=pink>

<link rel="stylesheet" type="text/css" href="css/styles_categoriaconstruccion.css">
    <main class="separarproductos">
          <div class="contenedor__productostabla">    
          <table>
     
            
        
      <tr>

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
            while ($fila = mysqli_fetch_object($ejecutar))
   

            {
                echo '<tr >'; 
                echo '<td>'.$fila->id_productos.'</td>';
                echo '<td>'.$fila->codigo.'</td>';
                echo '<td>'.$fila->nombre_producto.'</td>';
                echo '<td>'.$fila->precio.'</td>';
                echo '<td>'.$fila->referencia.'</td>';
                echo '<td ><img src="imagen/' .$fila->imagen.'" width="300" height="150"></td>';
            echo '<td> <form action="actualiza.php" method="POST"> 
           <input type="hidden" name="id_producto" value="'.$fila->id_productos.'">
             <input type="submit" value="Actualizar" class="btn btn-primary btn-block btn-large">
             </form>
             </td>';
            echo '<td> 
            
             </form><br>
             <form action="Eliminar3.php" method="POST" onC> 
             <input type="hidden" name="id_producto" value="'.$fila->id_productos.'">
             <input type="submit" value="Eliminar"   onclick="pedido()" class="btn btn-primary btn-block btn-large">   
             </form><br> 
<<<<<<< HEAD
// <<<<<<< HEAD
//              <form action="consultar.php"   method="POST"> 
//              <input type="submit" value="consultar pedidos" class="btn btn-primary btn-block btn-large">   
//              </form><br>
//              <form action="crearproducto.php" method="POST"> 
//              <input type="submit" value="crear producto"
//              class="btn btn-primary btn-block btn-large">   
//              </form><br>
// =======
            
             
// >>>>>>> main
=======
            
             
>>>>>>> main
             </td>';
                echo '</tr>';
               
            }
        ?></body>
        </table>