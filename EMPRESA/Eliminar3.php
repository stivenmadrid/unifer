<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "ferreteria") or
    die("Problemas con la conexión");
$id=$_POST['id_producto'];

  $registros = mysqli_query($conexion, "select * from productos
                        where id_productos=$id") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $view =mysqli_query($conexion, "delete  from productos where id_productos=$id") or
      die("Problemas en el select:" . mysqli_error($conexion));
      echo"<script>alert('SE ELIMINO CORRECTAMENTE');window.location.href='administrador.php';</script>";
  } else if($id==1) {
    echo"<script>alert('el producto tiene un pedido');window.location.href='administrador.php';</script>";
  }
  if($view) {

            } 
              
                
  mysqli_close($conexion);
  ?>
</body>

</html>
