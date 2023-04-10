<?php 
/*
--Autor: Alexander Torres
--Sitio Web: https://zdprogramacion.blogspot.com/
--Correos: alexnader20012@hotmail.com, mcharael@gmail.com
--Telefonos: +584123082432
 */ 

require_once 'conexion.php';

	$user=$_POST['user'];
	$pass=$_POST['pass'];

	if (empty($user)) {
		echo "usuario vacio";
	}
	elseif (empty($pass)) {
		echo "contraseña vacia";
	}
	else{

		$sql="SELECT * FROM user WHERE name_user='".$user."' AND pass_user='".$pass."'";
		$respuesta = mysqli_query($con, $sql);

		if( $fila = mysqli_fetch_row($respuesta) ){
				$user = $fila[1];
				$type = $fila[3];
			}
		if($type==1){
			header('Location: ../admin/admin.php');
		}
		else{
			header('Location: ../panel.php');
		}
	}


	

 ?>