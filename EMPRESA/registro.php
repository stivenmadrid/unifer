<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Registro-Usuarios</title>
        <link rel="stylesheet" type="text/css" href="../EMPRESA/css/styles_registro.css">
        <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" media="only screen and (max-width: 768px)" href="estilos.css">
       
</head>
<body>

        <div class="registro">

        

          <form align="center" action="servicios/registro.php" method="POST" onsubmit="return validar();">
         
                                                <h1 align="center"> REGISTRARME </h1>

                                                <Input type="text" placeholder="NIT" id="cedula" name="cedula" class="form-control form-control-user">
                                                <br>
                                                <Input type="text" placeholder="Nombre Usuario" id="nombre_usuario" name="nomusu" class="form-control form-control-user">
                                                <br>
                                                <Input type="text" placeholder="direccion" id="apellido" name="apeusu" class="form-control form-control-user">
                                                <br>
                                                <input type="text" placeholder="celular" id="telefono" name="telusu" class="form-control form-control-user">
                                               <br>
                                           
                                                <Input type="text" placeholder="Correo Electronico" id="correo" name="emausu" class="form-control form-control-user">
                                                <br>
                                                <input type="password" placeholder="Contraseña" id="contraseña" name="pasusu" class="form-control form-control-user">
                                                <br>
                                                <input type="password" placeholder="Confirmar contraseña" id="contraseña2" class="form-control form-control-user">
                                                <br>
                                                <Input type="text" placeholder="Confirmar Nit" id="Nit" name="Nit" class="form-control form-control-user">
                                                <br>
                                                <Input type="text" placeholder="Nombre Empresa" id="empresa" name="nombre_empresa" class="form-control form-control-user">
                                               
                                                <INPUT TYPE="submit" NAME="REGISTRARME" VALUE="REGISTRARME" class="btn btn-primary btn-block btn-large">
                                                 <br>
                                              
                                                 <P>Ya tienes una cuenta? entonces <a href="login.php"><spam>Click Aqui</spam></P></a>

                                              

         </form>
                                               
      

        </div>
</body>
</html>