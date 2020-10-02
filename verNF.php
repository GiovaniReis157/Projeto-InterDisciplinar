<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/vendor/metisMenu/metisMenu.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
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
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Notas Emitidas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <td>
                                <a href="index.php" class="btn btn-danger">Voltar</a> 
                            </td> 
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <div class="card-body">
<?php 
include 'conecta.php';

$consulta = "SELECT * FROM nota_fiscal";

foreach ($conecta -> query($consulta) as $linhaAtual) {
?>
<h1 class="page-title">
<?php
	echo "Nota Fiscal:".$linhaAtual['nf']."<br>";
?>
</h1>

<?php
	
    echo "Data: ".$linhaAtual['data']."<br>";

	echo "Valor total: R$".$linhaAtual['valor_total']."<br>";
?>
<?php

	$nota = $linhaAtual['nf'];
	$consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
	foreach ($conecta -> query($consulta2) as $linhaAtual2) {
		//echo "ID: ". $linhaAtual2['id'] ."-=-";
		echo "Código produto: ".$linhaAtual2['cod_produto']."-----";
		$codigo =$linhaAtual2['cod_produto'];
		$consulta3 = "SELECT * FROM produtos WHERE id='$codigo'";
		foreach ($conecta -> query($consulta3) as $linhaAtual3) {
			echo "Produto: ".$linhaAtual3['nome']."----";
			echo "Valor unitário: R$".$linhaAtual3['preco']."-----";
		}

		echo "Quantidade: ".$linhaAtual2['qtde']."-----";
		echo "Sub total: ".$linhaAtual2['subtotal']."<br>";
	}
	echo "<hr>";

}
echo "<br>";

?>
        
        </div>
    </body>
</html>