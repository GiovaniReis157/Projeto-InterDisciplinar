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
                        <h1>Sua Nota Fiscal</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Painel </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <div class="card-body">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                     <th>Código do Produto</th>
                     <th>Quatidade</th>
                     <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
    <?php 
    include 'conecta.php';
    //echo "<hr>";
    session_start();
    $nf = $_SESSION['nf'];

    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

    echo "Nota Fiscal: ". $nf ."<br>";
    $total = 0;
        foreach ($conecta -> query($consulta) as $linhaAtual) {
            echo"<tr>";
                echo"<td>".$linhaAtual['cod_produto']."</td>";
                echo"<td>".$linhaAtual['qtde']."</td>";
                echo"<td>".$linhaAtual['subtotal']."</td>";
                $total = $total + $linhaAtual['subtotal'];
            echo "</tr>";
    }
    ?>
    <h1 class="page-title">
    <?php  
    echo "Total: R$ ".$total."<br>";

    ?>
    </h1>
            </tbody>
        </table>
     </div>

    <p> O que deseja fazer?</p>
    <a href="seleUltimaNF.php">
        <button type="submit" class="btn btn-primary">Inserir Novo Produto</button>
    </a>
    <a href="finalizar.php?total=<?php echo $total; ?>">
        <button type="submit" class="btn btn-primary">Finalizar Nota Fiscal</button>
    </a>
    
           
                                    
</body>
</html>