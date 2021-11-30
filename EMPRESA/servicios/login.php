<?php

include('../db.php');


// $wilmer='123456';$row['pasusu']=== $wilmer or $row['pasusu']=== $stiven
// $stiven='Invesa1234';
$cargo=1;
$emausu = $_POST['emausu'];
$sql = "SELECT * FROM usuario WHERE emausu='$emausu'";
$result = mysqli_query($conexion, $sql);
if ($result) {
	$row = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	if ($count != 0) {
		$pasusu = $_POST['pasusu'];
		$email=$_POST['emausu'];
		$rol=$_POST['id_rol'];
		if ($row['pasusu'] != $pasusu) {
			echo '
			<script>
				alert("Clave de acceso incorrecto");
				window.location = "../login.php";
			</script>			
		
		';
		} else  {
			if( $row['pasusu']==$pasusu && $row['id_rol']==1){
				session_start();
				$_SESSION['codusu'] = $row['codusu'];
				$_SESSION['emausu'] = $row['emausu'];
				$_SESSION['nomusu'] = $row['nomusu'];
				$_SESSION['usuario'] = $row['Usuario'];
				header('Location: ../pagina_principal.php');

			}else{

				session_start();
				$_SESSION['codusu'] = $row['codusu'];
				$_SESSION['emausu'] = $row['emausu'];
				$_SESSION['nomusu'] = $row['nomusu'];
				$_SESSION['usuario'] = $row['Usuario'];
				header('Location: ../pagina_principal.php');

			}
			
			
		}
		
	} else {
		echo '
		<script>
			alert("Usuario o clave de acceso errados");
			window.location = "../login.php";
		</script>
	';
	}
} else {
	header('Location: ../login.php?e=1');
} 