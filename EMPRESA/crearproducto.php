<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NUEVO-PRODUCTO</title>
    
    <link rel="stylesheet" type="text/css" href="../EMPRESA/css/producto.css">
      

    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
</head>

</form>

<body>

<?php include("paginapro.php")?>

 
    <div class="contenedor__producto">

          <form ACTION="servicios/crearproducto.php" METHOD="POST">
          <h1><i> NUEVO PRODUCTO</i></h1>
                          
                                <BR>
                            ID PRODUCTO:  <INPUT TYPE="text" NAME="id_productos" class="form-control form-control-user"><br>
                            CODIGO DEL PRODUCTO:  <INPUT TYPE="text" NAME="codigo" class="form-control form-control-user"><br>
                            NOMBRE DEL PRODUCTO:          <INPUT TYPE="text" NAME="nombre_producto" class="form-control form-control-user"><br><br>
                                 PRECIO:                      <INPUT TYPE="text" NAME="precio" class="form-control form-control-user"><br><br>
                            REFERENCIA:                  <INPUT TYPE="text" NAME="referencia" class="form-control form-control-user"><br><br>
                            IMAGEN:                      <INPUT TYPE="text" NAME="imagen" class="form-control form-control-user"><br><br>
                            INGRESA LA CATEGORIA:        <INPUT TYPE="text" NAME="productos_id_categoria" class="form-control form-control-user"><br>
                        
                            <form>
                           <INPUT TYPE="submit" NAME="crear" VALUE="crear" class="btn btn-primary btn-block btn-large" >

        </form>
    <div>


    <div class="empresaproducto">
                <form action="servicios/empresaproducto" method="post">
                 ID PRODUCTO:  <INPUT TYPE="text" NAME="nit" class="form-control form-control-user"><br>
                 ID PRODUCTO:  <INPUT TYPE="text" NAME="id_producto" class="form-control form-control-user"><br>



          <form>

    </div>
                          


    
   </div>
</body>
</html>

