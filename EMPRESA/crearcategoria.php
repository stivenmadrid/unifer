<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/nuevacategoria.css">
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>

<?php include("paginapro.php")?>
            <div  class="nuevacategoria" >

                <form action="servicios/crearcategoria.php" method="POST">
                    <div id="logo"> 

                    </div> 
                    <h1 ALIGN="CENTER"><i> NUEVA CATEGORIA</i></h1><BR><BR><BR>
                    <section class="stark-login">
                    <div class=contenedor__cliente>
                    
                    <INPUT TYPE="text" NAME="id_categoria" placeholder="Id Categoria " class="form-control form-control-user"><br>
                    <INPUT TYPE="text" NAME="nombre_categoria" placeholder="Nombre Categoria "class="form-control form-control-user"><br>
                                
                                <INPUT TYPE="submit" NAME="crear" VALUE="crear" class="btn btn-primary btn-block btn-large" >



                </fom>


            </div>


    
</body>
</html>