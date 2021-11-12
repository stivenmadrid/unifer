<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/login2.css">
    <link href="bstra/css/sb-admin-2.min.css" rel="stylesheet">

</head> 
<div class="h2">  </div>      
<body >


   <div class="login">
   
	<h1 align="center">Login</h1>
    <form  action="servicios/login.php" method="POST"  name="form1" onsubmit="return vlidar1()">
    	<input type="text" placeholder="correo eletronico" id="correo1" name="emausu" required="required" />
        <br>
        <br>
        <input type="password"  placeholder="contraseña"  id="contraseña3" name="pasusu" required="required" />
        <br>
        <br>
        <button type="submit" id="Ingresar" class="btn btn-primary btn-block btn-large">Ingresar</button>
    </form>
   
 </div>
       

    
       
   
    <script src="js/script.js"></script>
</body>

</html>