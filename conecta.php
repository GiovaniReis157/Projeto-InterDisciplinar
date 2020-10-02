<?php 
	$host = "localhost";
	$user = "root";
	$password = "";
	$banco = "aula_php";

	$conecta = new MySQLi("$host","$user","$password","$banco");

	if ($conecta -> connect_error) {
		echo "Erro de Conexão";
	}
	else{
		//echo "Conexão bem sucedida!";
	}
?>