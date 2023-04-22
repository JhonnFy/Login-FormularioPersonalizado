<?php
	//Conectar con el servidor
	$server = "localhost";
	$user = "root";
	$pass = "";
	$DB = "tecnicmotorcycles";


	$conectar=mysqli_connect($server,$user,$pass);
	
	//Verificar la conexion
	if(!$conectar){
		die("Hole Giovanny No Topo El  Servidor".mysqli_error());
	}

	
	/*
	$v1 = ($_POST['IdAdmin']);
	$v2 = ($_POST['TipoDocumento']);
	$v3 = ($_POST['PrimerNombreAdmin']);
	$v4 = ($_POST['SegundoNombreAdmin']);
	$v5 = ($_POST['PrimerApellidoAdmin']);
	$v6 = ($_POST['SegundoApellidoAdmin']);
	$login = ($_POST['UsuarioAdmin']);
	$pass = ($_POST['PassAdmin']);

	echo $v1;
	echo $v2;
	echo $v3;
	echo $v4;
	echo $v5;
	echo $v6;
	echo $login;
	echo $pass;*/


	
	$base=mysqli_select_db($conectar,$DB);
	

	if(!$base){
		die("Hole Giovanny No Topo La DataBase".mysqli_error());
		}


	//Recuperar las Variables
	$TipoDeDocumento=$_POST['TipoDeDocumento'];
	$IdAdministrador=$_POST['IdAdministrador'];
	$PrimerNombre=$_POST['PrimerNombre'];
	$SegundoNombre=$_POST['SegundoNombre'];
	$PrimerApellido=$_POST['PrimerApellido'];
	$SegundoApellido=$_POST['SegundoApellido'];
	$Edad=$_POST['Edad'];
	$Rh=$_POST['Rh'];
	$ContactoCelular=$_POST['ContactoCelular'];
	$NombreEPS=$_POST['NombreEPS'];
	$Usuario=$_POST['Usuario'];
	$Pass=$_POST['Pass'];

	//Sentencia SQL
	$sql="INSERT  INTO  administrador  VALUES('$TipoDeDocumento',
						   '$IdAdministrador',
					       '$PrimerNombre',
					       '$SegundoNombre',
 					       '$PrimerApellido',
					       '$SegundoApellido',
						   '$Edad',
						   '$Rh',
						   '$ContactoCelular',
						   '$NombreEPS',
					       '$Usuario',
					       '$Pass')";
	
						  
	//Ejecutar la sentencia SQL
	$ejecutar=mysqli_query($conectar,$sql);
	//Confirmar Ejecición
	if(!$ejecutar){
		echo"Hole Giovanny nada de nada";
	}else{
		echo"Datos Guardados Correctamente<br><a href='http://localhost/FormularioAdministrador/html/'>Volver</a>";
	}
?>
	