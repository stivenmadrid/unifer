<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "ferreteria") or
    die("Problemas con la conexión");
$id=$_POST['id_pedido'];

  $registros = mysqli_query($conexion, "select * from pedido
                        where id_pedido=$id") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    $view =mysqli_query($conexion, "delete  from pedido where id_pedido=$id") or
      die("Problemas en el select:" . mysqli_error($conexion));
      echo"<script>alert('pedido eliminado');window.location.href='consultar.php';</script>";
  } else if($id==1) {
    echo"<script>alert('el producto no se pudo eliminar');window.location.href='consultar.php';</script>";
  }
 
              
                
  mysqli_close($conexion);
  ?>
</body>

</html>
