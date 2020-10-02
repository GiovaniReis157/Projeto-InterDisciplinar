
<html lang="en">

<head>
	<title>Nota Fiscal</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/metisMenu/metisMenu.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
	<link rel="stylesheet" href="assets/vendor/parsleyjs/css/parsley.css">
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
<?php 
include 'conecta.php';
//echo "<br><hr>";

$consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
$consulta = $conecta->query($consulta);
$linhaAtual = $consulta->fetch_assoc();
$ultimoRegis = $linhaAtual['ultima'];
//echo "Nota Fiscal: ".$ultimoRegis."<br>";
//echo "<hr>";


session_start();
$_SESSION['nf'] = $ultimoRegis;
?>
<!doctype html>
	<form action="insereItem.php?nf='<?php echo $ultimoRegis; ?>'" method="post">
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Nota Fiscal</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel-content">
							<h2 class="heading"><i class="fa fa-square"></i>Informações da Nota</h2>
							<form action="insereItem.php?nf='<?php echo $ultimoRegis; ?>'" id="basic-form" method="post" novalidate>
								<div class="form-group">
									<label>Código da Nota</label>
									<input type="text" name="nf" class="form-control" required value="<?php echo $ultimoRegis; ?>">
								</div>
								<div class="form-group">
									<label>Produto</label>
									<select name="produtoOpcao" id="produtoOpcao">
									<?php 
										$consulta = "SELECT * FROM produtos";
										foreach ($conecta -> query($consulta) as $linhaAtual) {
										?>
										<option
										value="<?php echo $linhaAtual['id']; ?>">
										<?php echo $linhaAtual['nome'];?>
										</option>
										<?php
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="text-input1">Quantidade</label>
									<input type="text" name="qtde" id="text-input1" class="form-control" required data-parsley-minlength="8">
								</div>
								<br/>
								<a href="insereitem.php">
									<button type="submit" class="btn btn-primary">Continuar</button>
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
		<div class="clearfix"></div>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/metisMenu/metisMenu.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="assets/vendor/parsleyjs/js/parsley.min.js"></script>
	<script src="assets/scripts/common.js"></script>
	<script>
	$(function() {
		// validation needs name of the element
		$('#food').multiselect();

		// initialize after multiselect
		$('#basic-form').parsley();
	});
	</script>
</body>

</html>
