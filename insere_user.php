<?php
	include 'conecta.php';

	$user = $_POST['user'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$consulta = $conecta -> prepare("INSERT INTO usuarios (nome, email, senha) VALUES ('$user','$email','$senha')");

	$consulta -> execute();

	header('Location: portal.php');
?>