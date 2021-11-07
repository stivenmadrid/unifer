<?php
 session_start();
include ("db.php");
$sql = "select * from categoria";
$ejecutar = $conexion->query($sql);


function buscarProducto($id_productos)
{
    include ("db.php");
    $sql = "select * from productos where id_productos=$id_productos";
    $ejecutar = $conexion->query($sql);
    
    $fila = mysqli_fetch_object($ejecutar);
   
    $nombre_producto=$fila->nombre_producto;
    return $nombre_producto;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>unifer</title>
    <link rel="stylesheet" type="text/css" href="css/styles_pagina_pricipal.css">
    <link rel="stylesheet" type="text/css" href="css/styles_tablaproductos.css">

    <!-- Custom fonts for this template-->
    <link href="bstra/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">


</head>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="bs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bs/css/sb-admin-2.min.css" rel="stylesheet">

</head>
  
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">UNIFER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="administrador.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

        


           
       

<!-- Bootstrap core JavaScript-->
<script src="bstra/vendor/jquery/jquery.min.js"></script>
<script src="bstra/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="bstra/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="bstra/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="bstra/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="bstra/js/demo/chart-area-demo.js"></script>
<script src="bstra/js/demo/chart-pie-demo.js"></script>

</body>

</html>