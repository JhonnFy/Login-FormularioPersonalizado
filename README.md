# Login-FormularioPersonalizado
Tecnologías: Html/Css/Js/Php


![image](https://user-images.githubusercontent.com/97255802/233803231-014bf2cc-26f7-44c3-a396-c4305c9b70d6.png)
![image](https://user-images.githubusercontent.com/97255802/233803248-c96e9467-9369-4e41-b90f-c97777814e68.png)

MetodoPOST

<?php
	//Conectar con el servidor
	$server = "localhost";
	$user = "root";
	$pass = "";
	$DB = "tecnicmotorcycles";


	$conectar=mysqli_connect($server,$user,$pass);
	
	//Verificar la conexion
	if(!$conectar){
		die("Jhon No Encuentro El Servidor".mysqli_error());
	}



	
	$base=mysqli_select_db($conectar,$DB);
	

	if(!$base){
		die("Jhon No Encuentro El Servidor".mysqli_error());
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
		echo"Jhon No Encuentro El Servidor";
	}else{
		echo"Datos Guardados Correctamente<br><a href='AquiVaLaRuta'>Volver</a>";
	}
?>
	

