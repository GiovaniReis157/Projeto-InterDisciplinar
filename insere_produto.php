<?php
	include 'conecta.php';

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$marca = $_POST['marca'];

	$consulta = $conecta -> prepare("INSERT INTO produtos (nome, preco, marca) VALUES ('$nome','$preco','$marca')");

	$consulta -> execute();

	header('Location: index.php');
?>
