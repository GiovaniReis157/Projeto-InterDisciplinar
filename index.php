<?php
	session_start();
	/*
	$_SESSION['id'] 
	$_SESSION['nome'] 
	$_SESSION['email'] 
	$_SESSION['senha'] 
	*/

	if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true) && (!isset($_SESSION['email']) == true)){
		header('Location: portal.php');
	}

?>
<?php
    include 'conecta.php';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Index</title>
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
	<!-- WRAPPER -->
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu"></i></button>
				</div>
				<!-- logo -->
				<div class="navbar-brand">
					<a href="index.html"><img src="assets/img/logo.png" alt="DiffDash Logo" class="img-responsive logo"></a>
				</div>
				<!-- end logo -->
				<div class="navbar-right">
					<!-- search form -->
					<form id="navbar-search" class="navbar-form search-form">
						<input value="" class="form-control" placeholder="Search here..." type="text">
						<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
					<!-- end search form -->
					<!-- navbar menu -->
					<div id="navbar-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-cog"></i>
								</a>
								<ul class="dropdown-menu user-menu menu-icon">
									<li class="menu-heading">ACCOUNT SETTINGS</li>
									<li><a href="#"><i class="fa fa-fw fa-edit"></i> <span>Basic</span></a></li>
									<li><a href="#"><i class="fa fa-fw fa-bell"></i> <span>Notifications</span></a></li>
									<li><a href="#"><i class="fa fa-fw fa-sliders"></i> <span>Preferences</span></a></li>
									<li><a href="#"><i class="fa fa-fw fa-lock"></i> <span>Privacy</span></a></li>
									<li class="menu-heading">BILLING</li>
									<li><a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span>Invoices</span></a></li>
									<li><a href="#"><i class="fa fa-fw fa-credit-card"></i> <span>Payments</span></a></li>
									<li><a href="#"><i class="fa fa-fw fa-refresh"></i> <span>Renewals</span></a></li>
									<li class="menu-button">
										<a href="#" class="btn btn-primary"><i class="fa fa-rocket"></i> UPGRADE PLAN</a>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="lnr lnr-question-circle"></i>
								</a>
								<ul class="dropdown-menu user-menu">
									<li>
										<form class="search-form help-search-form">
											<input value="" class="form-control" placeholder="How can we help?" type="text">
											<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
										</form>
									</li>
									<li class="menu-heading">HOW-TO</li>
									<li><a href="#">Setting up Campaign</a></li>
									<li><a href="#">Understanding Website Analytics</a></li>
									<li><a href="#">Boost Your Sales</a></li>
									<li><a href="#">Knowing Your Audience</a></li>
									<li class="menu-heading">ACCOUNT</li>
									<li><a href="#">Change Password</a></li>
									<li><a href="#">Privacy &amp; Security</a></li>
									<li><a href="#">Membership</a></li>
									<li class="menu-heading">BILLING</li>
									<li><a href="#">Setup Payment</a></li>
									<li><a href="#">Auto-Renewal Program</a></li>
									<li><a href="#">Cancellation</a></li>
									<li class="menu-button">
										<a href="#" class="btn btn-primary"><i class="fa fa-question-circle"></i> HELP CENTER</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- end navbar menu -->
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="left-sidebar" class="sidebar">
			<button type="button" class="btn btn-xs btn-link btn-toggle-fullwidth">
				<span class="sr-only">Toggle Fullwidth</span>
				<i class="fa fa-angle-left"></i>
			</button>
			<div class="sidebar-scroll">
				<div class="user-account">
					<div class="dropdown">
						<a href="" class="dropdown-toggle user-name" data-toggle="dropdown">Olá, <strong><?php echo $_SESSION['nome']; ?></strong> <i class="fa fa-caret-down"></i></a>
						<ul class="dropdown-menu dropdown-menu-right account">
							<li><a href="logout1.php">Logout</a></li>
						</ul>
					</div>
				</div>
				<nav id="left-sidebar-nav" class="sidebar-nav">
					<ul id="main-menu" class="metismenu">
						<li class=""><a href="index.php"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li class="">
							<a href="#subPages" class="has-arrow" aria-expanded="false"><i class="lnr lnr-file-empty"></i> <span>Outras Páginas</span></a>
							<ul aria-expanded="true">
								<li class=""><a href="dataNF.php">Iniciar Compra</a></li>
								<li class=""><a href="verNF.php">Ver Notas Emitidas</a></li>
								<li class=""><a href="cadastra_produto.php">Cadastrar Produtos</a></li>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT -->
		<div id="main-content">
			<div class="container-fluid">
				<h1 class="sr-only">Dashboard</h1>
				<!-- WEBSITE ANALYTICS -->
				<div class="dashboard-section">
					<div class="section-heading clearfix">
						<h4 class="section-title"></i> Olá, Seja Bem Vindo a nossa Página Inicial!</h4>
						</div>
					</div>
				</div>
				<!-- END CAMPAIGN -->
				<!-- SOCIAL -->
				<div class="dashboard-section no-margin">
					<div class="section-heading clearfix">
						<h2 class="section-title"><i class=></i> Selecione Abaixo a Ação que deseja fazer </h2>
					</div>

					<div class="panel-content">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<a href="dataNF.php">
								<button type="button"class="metric-inline"> Iniciar Compra</button>
								</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="verNF.php">
								<button type="button"class="metric-inline"> Notas Emitidas </button>
							</a>
							</div>
							<div class="col-md-3 col-sm-6">
								<a href="cadastra_produto.php">
								<button type="button"class="metric-inline"> Cadastrar Produtos </button>
							</a>
							</div>
							<div class="col-sm-12">
                <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Produtos Cadastrados</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Produto</th>
                                            <th>Preço</th>
                                            <th>Marca</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        
    <?php
        $consulta = "SELECT * FROM produtos";

        foreach ($conecta -> query($consulta) as $linha) {
            echo"<tr>";
                echo"<td>".$linha['id']."</td>";
                echo"<td>".$linha['nome']."</td>";
                echo"<td>".$linha['preco']."</td>";
                echo"<td>".$linha['marca']."</td>"; 
    			echo "</tr>";       
        }
    ?> 
           
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
						</div>
					</div>
				</div>
				<!-- END SOCIAL -->
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
	<script src="assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
	<script src="assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js"></script>
	<script src="assets/vendor/chartist-plugin-axistitle/chartist-plugin-axistitle.min.js"></script>
	<script src="assets/vendor/chartist-plugin-legend-latest/chartist-plugin-legend.js"></script>
	<script src="assets/vendor/toastr/toastr.js"></script>
	<script src="assets/scripts/common.js"></script>
	<script>
	$(function() {

		// sparkline charts
		var sparklineNumberChart = function() {

			var params = {
				width: '140px',
				height: '30px',
				lineWidth: '2',
				lineColor: '#20B2AA',
				fillColor: false,
				spotRadius: '2',
				spotColor: false,
				minSpotColor: false,
				maxSpotColor: false,
				disableInteraction: false
			};

			$('#number-chart1').sparkline('html', params);
			$('#number-chart2').sparkline('html', params);
			$('#number-chart3').sparkline('html', params);
			$('#number-chart4').sparkline('html', params);
		};

		sparklineNumberChart();


		// traffic sources
		var dataPie = {
			series: [45, 25, 30]
		};

		var labels = ['Direct', 'Organic', 'Referral'];
		var sum = function(a, b) {
			return a + b;
		};

		new Chartist.Pie('#demo-pie-chart', dataPie, {
			height: "270px",
			labelInterpolationFnc: function(value, idx) {
				var percentage = Math.round(value / dataPie.series.reduce(sum) * 100) + '%';
				return labels[idx] + ' (' + percentage + ')';
			}
		});


		// progress bars
		$('.progress .progress-bar').progressbar({
			display_text: 'none'
		});

		// line chart
		var data = {
			labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
			series: [
				[200, 380, 350, 480, 410, 450, 550],
			]
		};

		var options = {
			height: "200px",
			showPoint: true,
			showArea: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
			chartPadding: {
				top: 0,
				right: 0,
				bottom: 30,
				left: 30
			},
			plugins: [
				Chartist.plugins.tooltip({
					appendToBody: true
				}),
				Chartist.plugins.ctAxisTitle({
					axisX: {
						axisTitle: 'Day',
						axisClass: 'ct-axis-title',
						offset: {
							x: 0,
							y: 50
						},
						textAnchor: 'middle'
					},
					axisY: {
						axisTitle: 'Reach',
						axisClass: 'ct-axis-title',
						offset: {
							x: 0,
							y: -10
						},
					}
				})
			]
		};

		new Chartist.Line('#demo-line-chart', data, options);


		// sales performance chart
		var sparklineSalesPerformance = function() {

			var lastWeekData = [142, 164, 298, 384, 232, 269, 211];
			var currentWeekData = [352, 267, 373, 222, 533, 111, 60];

			$('#chart-sales-performance').sparkline(lastWeekData, {
				fillColor: 'rgba(90, 90, 90, 0.1)',
				lineColor: '#5A5A5A',
				width: '' + $('#chart-sales-performance').innerWidth() + '',
				height: '100px',
				lineWidth: '2',
				spotColor: false,
				minSpotColor: false,
				maxSpotColor: false,
				chartRangeMin: 0,
				chartRangeMax: 1000
			});

			$('#chart-sales-performance').sparkline(currentWeekData, {
				composite: true,
				fillColor: 'rgba(60, 137, 218, 0.1)',
				lineColor: '#3C89DA',
				lineWidth: '2',
				spotColor: false,
				minSpotColor: false,
				maxSpotColor: false,
				chartRangeMin: 0,
				chartRangeMax: 1000
			});
		}

		sparklineSalesPerformance();

		var sparkResize;
		$(window).on('resize', function() {
			clearTimeout(sparkResize);
			sparkResize = setTimeout(sparklineSalesPerformance, 200);
		});


		// top products
		var dataStackedBar = {
			labels: ['Q1', 'Q2', 'Q3'],
			series: [
				[800000, 1200000, 1400000],
				[200000, 400000, 500000],
				[100000, 200000, 400000]
			]
		};

		new Chartist.Bar('#chart-top-products', dataStackedBar, {
			height: "250px",
			stackBars: true,
			axisX: {
				showGrid: false
			},
			axisY: {
				labelInterpolationFnc: function(value) {
					return (value / 1000) + 'k';
				}
			},
			plugins: [
				Chartist.plugins.tooltip({
					appendToBody: true
				}),
				Chartist.plugins.legend({
					legendNames: ['Phone', 'Laptop', 'PC']
				})
			]
		}).on('draw', function(data) {
			if (data.type === 'bar') {
				data.element.attr({
					style: 'stroke-width: 30px'
				});
			}
		});

	});
	</script>
	<script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
</body>

</html>