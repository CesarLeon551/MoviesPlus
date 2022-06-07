<?php

include('conexion/config.php');

if (isset($_SESSION['emailUser']) != "") {
	$rol = $_SESSION['idrol'];
}

if(($_SERVER["REQUEST_METHOD"] == "POST")){
		date_default_timezone_set("America/Bogota");
		$sesionDesde   = date("Y-m-d H:i:A");
		

		//Evitar recibir las variables por metodo $_REQUEST['xxx'];
		//Limpiando variables para evitar inyeccion SQL
		$email = filter_var($_REQUEST['emailUser'], FILTER_SANITIZE_EMAIL);
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		    $emailUser 	= ($_REQUEST['emailUser']);
		}
		$passwordUser   = trim($_REQUEST['passwordUser']);
	

		/*
		https://bugs.mysql.com/bug.php?id=71939
		
		ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
		ALTER DATABASE MyDataBase COLLATE utf8_bin
		
		$sqlVerificando = ("SELECT * FROM myusers WHERE emailUser COLLATE utf8_bin='".$emailUser."' AND passwordUser COLLATE utf8_bin='".$passwordUser."' ");
		Evitar los Select * From xyz
		No se debe declarar la session hasta saber si los datos son correctos
		*/

		$sqlVerificandoLogin = ("SELECT IdUser, nameUser, emailUser, passwordUser  FROM myusers WHERE emailUser COLLATE utf8_bin='$emailUser'and confirmado = 'si'");
		$resultLogin = mysqli_query($con, $sqlVerificandoLogin) or die(mysqli_error($con));;
		$numLogin    = mysqli_num_rows($resultLogin);


		if ($numLogin ==1){
			//if(mysqli_num_rows($resultLogin) == 1){
			while($rowData  = mysqli_fetch_assoc($resultLogin)){
				$passwordBD = $rowData['passwordUser'];
				//password_verify — Comprueba que la contraseña facilitada coincida con un hash, 
				//retorna una respuesta de tipo booleano es decir (1 - 0) (TRUE - FALSE)
				/* Ademas es capaz de encontrar la correspondencia entre 
				cualquiera de los múltiples hash que puede generar password_hash (recuerde que cada vez que se ejecuta,aún a partir de la misma contraseña, genera uno diferente) con la contraseña que se le suministre.*/
				if(password_verify($passwordUser, $passwordBD)) {
					session_start(); //Creando la sesion ya que los datos son validos
					$_SESSION['IdUser'] 	= $rowData['IdUser']; 
					$_SESSION['nameUser']	= $rowData['nameUser'];
					$_SESSION['emailUser'] 	= $rowData['emailUser'];
				
					//Actualizando la primera Hora del Login
					$Update = ("UPDATE myusers SET sesionDesde='$sesionDesde' WHERE emailUser='$emailUser' ");
					$resultado = mysqli_query($con, $Update);
					/*
					echo "El rol es: '$rol'";

					if($rol == 2){
						header("location:indexSesion.php?a=1");
					}else if($rol == 1){
						header("location:indexAdmin.php?a=1");
					}*/

					header("location:indexSesion.php?a=1");
				}else{
					//echo "Login incorecto";
					header("location:sesion.php?b=1");
				}
			}

		} 
		else{
			//echo "No existe el correo registrado";
			header("location:sesion.php?b=1");
		}
	}
	
?>
