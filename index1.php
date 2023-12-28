<!doctype html>
<html lang="en">

<head>
	<style>
        body.personeller-page label {
            color: black !important;
        }
    </style>
	<style>
        .brand img {
            max-width: 100%;
            height: auto;
            /* Ek olarak, resmin maksimum genişliğini ve yüksekliğini belirleyebilirsiniz */
            /* max-width: 200px;  // Örnek: Maksimum genişlik 200px */
            /* max-height: 150px; // Örnek: Maksimum yükseklik 150px */
        }
    </style>

	<style>
		body {
			background-color: #fff; /* Sayfa arka plan rengi beyaz olsun */
		}

		#wrapper {
			background-color: #fff; /* Resmin olduğu alanın arka plan rengi beyaz olsun */
		}

		.brand {
			background-color: #fff; /* Resmin sağ tarafının arka plan rengi beyaz olsun */
		}
	</style>

	<title>EXPRESS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/EXPRESS.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Anasayfa</span></a></li>
						<li><a href="urunler.php" class=""><i class="lnr lnr-shirt"></i> <span>Ürünler</span></a></li>
						<li><a href="satislar.php" class=""><i class="lnr lnr-cart"></i> <span>Satışlar</span></a></li>
						<li><a href="magazalar.php" class=""><i class="lnr lnr-pushpin"></i> <span>Mağazalar</span></a></li>
						<li><a href="personeller.php" class=""><i class="lnr lnr-users"></i> <span>Personeller</span></a></li>
						<li><a href="musteriler.html" class=""><i class="lnr lnr-smile"></i> <span>Müşteriler</span></a></li>
						<li><a href="tables.html" class=""><i class="lnr lnr-exit-up"></i> <span>Çıkış</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid" style="display: flex;">
					
					<div class="pieChart" style="position: relative; display: flex; margin-left: 55px;">
						<html>
							<head>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script type="text/javascript">
								google.charts.load("current", {packages:['corechart']});
								google.charts.setOnLoadCallback(drawChart);
								function drawChart() {
								var data = google.visualization.arrayToDataTable([
									["Element", "Density", { role: "style" } ],
									["Ekim",
									<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ekim) as ekim from satislar;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#b87333"],
									["Kasim", <?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.kasim) as kasim from satislar;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#b87333"],
									["Aralik", <?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.aralik) as aralik from satislar;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#b87333"],
									
								]);

								var view = new google.visualization.DataView(data);
								view.setColumns([0, 1,
												{ calc: "stringify",
													sourceColumn: 1,
													type: "string",
													role: "annotation" },
												2]);

								var options = {
									title: "Son 3 ayin satis adedi grafigi",
									width: 600,
									height: 400,
									bar: {groupWidth: "50%"},
									legend: { position: "none" },
								};
								var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
								chart.draw(view, options);
							}
							</script>
							</head>
							<body>
							<div id="columnchart_values" style=" box-shadow: 3px 7px #888888; width: 600px; height: 400px;"></div>
							</body>
						</html>
					</div>
					<div class="boxs-bootstrap">
						<div class="card text-white bg-primary mb-3" style="max-width: 22rem;">
							<div class="card-header">Aralik ayi en cok satis yapan magaza</div>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<hr>
								<p class="card-text">
								<?php 
							
					
								$baglan=mysqli_connect("localhost","root","","kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT magazalar.magaza_ad, satislar.aralik from magazalar,satislar WHERE magazalar.magaza_id=satislar.magaza_id and satislar.aralik = (SELECT MAX(satislar.aralik) from satislar) GROUP BY magazalar.magaza_id;";
								$result1 = mysqli_query($baglan, $sql);
								
								
								while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
								}
								
										
								
								?>
								</p>
							</div>
						</div>
						<div class="card1 text-white bg-primary mb-3" style="max-width: 22rem;">
							<div class="card-header">Aralik ayi en az satis yapan magaza</div>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<hr>
								<p class="card-text">
								<?php 
							
					
								$baglan=mysqli_connect("localhost","root","","kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT magazalar.magaza_ad, satislar.aralik from magazalar,satislar WHERE magazalar.magaza_id=satislar.magaza_id and satislar.aralik = (SELECT min(satislar.aralik) from satislar) GROUP BY magazalar.magaza_id;";
								$result1 = mysqli_query($baglan, $sql);
								
								
								while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
								}
								
										
								
								?>
								</p>
							</div>
						</div>
					</div>

				</div>
				<div class="boxs-bootstrap1">
						<div class="cards text-white bg-primary mb-3" style="max-width: 26rem;">
							<div class="card-header">2022 Toplam gelir</div>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<hr>
								<p class="card-text">
								<?php 
							
					
								$baglan=mysqli_connect("localhost","root","","kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT concat((SUM(magaza_kazanç.ocak) + SUM(magaza_kazanç.subat) + SUM(magaza_kazanç.mart) + SUM(magaza_kazanç.nisan) + SUM(magaza_kazanç.mayis) + SUM(magaza_kazanç.haziran) + SUM(magaza_kazanç.temmuz) + SUM(magaza_kazanç.agustos) + SUM(magaza_kazanç.eylul) + SUM(magaza_kazanç.ekim) + SUM(magaza_kazanç.kasim) + SUM(magaza_kazanç.aralik)),' adet') as toplam_gelir_2022 from magaza_kazanç;";
								$result1 = mysqli_query($baglan, $sql);
								
								
								while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
								}
								
										
								
								?>
								</p>
							</div>
						</div>
						<div class="cards text-white bg-primary mb-3" style="max-width: 26rem;">
							<div class="card-header">2022 toplam gider</div>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<hr>
								<p class="card-text">
								<?php 
							
					
								$baglan=mysqli_connect("localhost","root","","kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT concat((SUM(magaza_gider.ocak) + SUM(magaza_gider.subat) + SUM(magaza_gider.mart) + SUM(magaza_gider.nisan) + SUM(magaza_gider.mayis) + SUM(magaza_gider.haziran) + SUM(magaza_gider.temmuz) + SUM(magaza_gider.agustos) + SUM(magaza_gider.eylul) + SUM(magaza_gider.ekim) + SUM(magaza_gider.kasim) + SUM(magaza_gider.aralik)),' TL') as toplam_gelir_2022 from magaza_gider;";
								$result1 = mysqli_query($baglan, $sql);
								
								
								while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
								}
								
										
								
								?>
								</p>
							</div>
						</div>
						<div class="cards text-white bg-primary mb-3" style="max-width: 26rem;">
							<div class="card-header">2022 toplam satis</div>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<hr>
								<p class="card-text">
								<?php 
							
					
								$baglan=mysqli_connect("localhost","root","","kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT concat((SUM(satislar.ocak) + SUM(satislar.subat) + SUM(satislar.mart) + SUM(satislar.nisan) + SUM(satislar.mayıs) + SUM(satislar.haziran) + SUM(satislar.temmuz) + SUM(satislar.agustos) + SUM(satislar.eylul) + SUM(satislar.ekim) + SUM(satislar.kasim) + SUM(satislar.aralik)),' adet') as toplam_satis_2022 from satislar;";
								$result1 = mysqli_query($baglan, $sql);
								
								
								while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
								}
								
										
								
								?>
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
</body>

</html>
