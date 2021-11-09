<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "ferreteria") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from productos
                        where id_productos='$_REQUEST[id_producto]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $view =mysqli_query($conexion, "delete  from productos where id_productos='$_REQUEST[id_producto]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Se efectuó el borrado del producto con dicho id.";
  } else {
    echo "No existe  el id.";
  }
  if($view) {
    header("location:administrador.php");
    
            }          
  mysqli_close($conexion);
  ?>
</body>

</html>
