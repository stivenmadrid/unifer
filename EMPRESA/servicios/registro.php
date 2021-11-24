<?php
    
  
    $cedula = $_POST['cedula'];
    $nombre_usuario = $_POST['nomusu'];
    $apellido = $_POST['apeusu'];
    $correo = $_POST['emausu'];
    $telefono = $_POST['telusu'];
    $password = $_POST['pasusu'];
    $Nit= $_POST['Nit'];
    $nombre_empresa= $_POST['nombre_empresa'];
 
     //encriptador de password

     $conexion = mysqli_connect("localhost","root","","ferreteria") or die("Error en la conexiÃ³n a la base de datos");
    $sql = "INSERT INTO usuario (cedula,nomusu, apeusu, emausu, telusu, pasusu,Nit,empresa) VALUES ('$cedula','$nombre_usuario','$apellido', '$correo', '$telefono', '$password','$Nit','$nombre_empresa')";

    //VALIDADOR DE DATOS REPETIDOS EN BD SQL
    
    //INICIO DE ENVIO DE DATOS EN BD SQL
    $ejecutar = mysqli_query ($conexion, $sql);

    if($ejecutar){
        echo '
            <script>
                alert("empresa almacenado correctamente");
                window.location = "../login.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert(Informacion con errores");
            // window.location = "../pagina_principal.php";
        </script>
    ';
    }

    mysqli_close($conexion);

    //FIN DE ENVIO DE DATOS EN BD SQL
?>