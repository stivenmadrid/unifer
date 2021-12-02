
<?php

$cedul= ['cedula'];
$id_productos=['id_productos'];


$conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
$sql4="INSERT INTO empresaproducto (cedula,id_productos) VALUES  ('$cedul','$id_productos')";

