<?php
$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql = "select * from productos";
$ejecutar = $conexion->query($sql);





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
            while ($fila = mysqli_fetch_object($ejecutar))
   

            {

              $sql2=" select u.empresa, e.cedula
              FROM empresaproducto as e inner join usuario as u
              on  e.cedula=u.cedula where e.id_productos='$fila->id_productos'";
                $ejecutar2 = $conexion->query($sql2);
                $fila2 = mysqli_fetch_object($ejecutar2);
                if($fila2==""){

                    $nombreempresa="sin nombre de empresa";
                }else{
                    $nombreempresa=$fila2->empresa;
                    
                }

                echo '<tr >'; 

                echo '<td>'.$nombreempresa.'</td>';
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