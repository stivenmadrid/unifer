<?php
session_start();
$id_productos=$_POST["id_productos"];
$cantidad=$_POST["cantidad"];

// $carrito=array[];
$_SESSION['id_productos']=$id_productos;
$_SESSION['cantidad']=$cantidad;
// $=_SESSION[$carrito];
include ("pagina_principal.php");


//print "$id_productos <br> $cantidad";
?>