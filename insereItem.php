<!doctype html>
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
		echo "<br>";
		session_start();
		$nf = $_SESSION['nf'];
		
		$idProduto = $_POST['produtoOpcao'];
		$qtdeProduto = $_POST['qtde'];

		$consulta = "SELECT preco,nome FROM produtos WHERE id='$idProduto'";
		$consulta = $conecta->query($consulta);
		$linhaAtual = $consulta->fetch_assoc();

		$preco = $linhaAtual['preco'];
		$nome = $linhaAtual['nome'];

		$sub = $preco * $qtdeProduto;

	?>
	<form action="insereItemNF.php" method="post">
		<div id="main-content">
			<div class="container-fluid">
				<div class="section-heading">
					<h1 class="page-title">Itens Da Compra</h1>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel-content">
							<h2 class="heading"><i class="fa fa-square"></i>Informações da Compra</h2>
							<form id="basic-form" method="post" novalidate>
								<div class="form-group">
									<label>ID do Produto</label>
									<input type="text" name="idProduto" class="form-control" value="<?php echo $idProduto; ?>" reandonly="reandonly">
								</div>
								<div class="form-group">
									<label>Produto</label>
									<input type="text" name="nomeProduto" class="form-control" value="<?php echo $nome; ?>" reandonly="reandonly">
								</div>
								<div class="form-group">
									<label>Valor</label>
									<input type="text" name="uniValorProduto" class="form-control" value="<?php echo $preco; ?>" reandonly="reandonly">
								</div>
								<div class="form-group">
									<label>Quantidade</label>
									<input type="text" name="qtdeProduto" class="form-control" value="<?php echo $qtdeProduto; ?>" reandonly="reandonly">
								</div>
								<div class="form-group">
									<label>Subtotal</label>
									<input type="text" name="sub" class="form-control" value="<?php echo $sub; ?>" reandonly="reandonly">
								</div>
								<br/>
								<button type="submit" class="btn btn-primary">Continuar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN CONTENT -->
		<div class="clearfix"></div>
		<footer>
			<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
		</footer>
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
