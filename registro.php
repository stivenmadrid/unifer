<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro-Usuarios</title>
</head>
<body>
        <div>

        

          <form action="servicios/registro.php" method="POST" onsubmit="return validar();">
                                                <h1> REGISTRARME </h1>

                                                <Input type="text" placeholder="cedula" id="cedula" name="cedula" class="form-control form-control-user">
                                                <br>
                                                <Input type="text" placeholder="Nombre Completo" id="nombre" name="nomusu" class="form-control form-control-user">
                                                <br>
                                                <Input type="text" placeholder="Apellido Completo" id="apellido" name="apeusu" class="form-control form-control-user">
                                                <br>
                                                <input type="text" placeholder="celular" id="telefono" name="telusu" class="form-control form-control-user">
                                               <br>
                                           
                                                <Input type="text" placeholder="Correo Electronico" id="correo" name="emausu" class="form-control form-control-user">
                                                <br>
                                                <input type="password" placeholder="Contraseña" id="contraseña" name="pasusu" class="form-control form-control-user">
                                                <br>
                                                <input type="password" placeholder="Confirmar contraseña" id="contraseña2" class="form-control form-control-user">
                                                <br>
                                                <INPUT TYPE="submit" NAME="REGISTRARME" VALUE="REGISTRARME" class="btn btn-success btn-user btn-block">


         </form>
                                               <P>Ya tienes una cuenta? entonces <a href="login.php"><spam>Click Aqui</spam></P></a>


        </div>
</body>
</html>