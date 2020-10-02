<?php 
include 'conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data da nota fiscal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/metisMenu/metisMenu.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
	<div class="row">
		<div class="col-md-4">
			<div class="panel-content">
				<form action="geraNF.php" method="post">
					<h2 class="heading"><i class="fa fa-square"></i> Insira sua Data</h2>
					<h3> Data:<input type="date" name="data"> </h3>
					
							<p class="demo-button">
								<button type="submit" class="btn btn-success">CONTINUAR</button>
								<a href="index.php"><button type="button" class="btn btn-warning">VOLTAR</button></a>
							</p>
				</form>
			</div>
		</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	

	<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
				</div>
</body>
</html>