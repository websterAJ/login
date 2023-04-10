<?php 
/*
--Autor: Alexander Torres
--Sitio Web: https://zdprogramacion.blogspot.com/
--Correos: alexnader20012@hotmail.com, mcharael@gmail.com
--Telefonos: +584123082432
 */ 
	
	include 'config.php';

	$con=mysqli_connect(HOST,USERHOST,PASSHOST,DATABASE);

	mysqli_set_charset($con, 'utf8'); // formato de escritura
	date_default_timezone_set('America/caracas'); // zona horario de venezuela

?>