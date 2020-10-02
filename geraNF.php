<?php 
	include 'conecta.php';
	$dataAtual = $_POST['data'];
	$consulta = $conecta -> prepare("INSERT INTO nota_fiscal (data) VALUES ('$dataAtual')");
	$consulta -> execute();
	header('Location: seleUltimaNF.php');
?>