<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>MAVI</title>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="magaza.css">

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

    <!-- Option içeriği -->
</select>
</head>
<!doctype html>
<html lang="en">

<head>
	<style>
        body.personeller-page label {
            color: black !important;
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
			background-color: ##3498db; /* Resmin sağ tarafının arka plan rengi beyaz olsun */
		}
	</style>


<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
			<a href="index.php"><img src="fotoğraflar/mavi.jpg" alt="Mavi" class="mavi-resim"></a>
                </a>
            </div>
        </nav>

        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Anasayfa</span></a></li>
                        <li><a href="urunler.php" class=""><i class="lnr lnr-shirt"></i> <span>Ürünler</span></a></li>
                        <li><a href="satislar.php" class=""><i class="lnr lnr-cart"></i> <span>Satışlar</span></a></li>
                        <li><a href="magazalar.php" class=""><i class="lnr lnr-pushpin"></i> <span>Mağazalar</span></a></li>
                        <li><a href="personeller.php" class=""><i class="lnr lnr-users"></i> <span>Personeller</span></a></li>
                        <li><a href="musteriler.php" class=""><i class="lnr lnr-smile"></i> <span>Müşteriler</span></a></li>
                        <li><a href="Login.php" class=""><i class="lnr lnr-exit-up"></i> <span>Çıkış</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid" style="display: inline-block;">
						<div class="cards text-white bg-primary mb-3" style="max-width: 22rem;display: inline-block;">
							<div class="card-header">2022 Toplam gelir</div>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<hr>
								<p class="card-text">
								<?php 
							
					
								$baglan=mysqli_connect("localhost","root","","kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT concat((SUM(magaza_kazanc.ocak) + SUM(magaza_kazanc.subat) + SUM(magaza_kazanc.mart) + SUM(magaza_kazanc.nisan) + SUM(magaza_kazanc.mayis) + SUM(magaza_kazanc.haziran) + SUM(magaza_kazanc.temmuz) + SUM(magaza_kazanc.agustos) + SUM(magaza_kazanc.eylul) + SUM(magaza_kazanc.ekim) + SUM(magaza_kazanc.kasim) + SUM(magaza_kazanc.aralik)),' TL') as toplam_gelir_2022 from magaza_kazanc;";
								$result1 = mysqli_query($baglan, $sql);
								
								
								while($row = mysqli_fetch_array($result1)){                                             
									$sayi1 = substr($row[0],0,3);
									$sayi2 = substr($row[0],3,3);
									$sayi3 = substr($row[0],6,8);                                        
									echo $sayi1.".".$sayi2.".".$sayi3;
								}
								
										
								
								?>
								</p>
							</div>
						</div>
						<div class="cards text-white bg-primary mb-3" style="max-width: 22rem;display: inline-block;">
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
									$sayi1 = substr($row[0],0,3);
									$sayi2 = substr($row[0],3,3);
									$sayi3 = substr($row[0],6,8);                                        
									echo $sayi1.".".$sayi2.".".$sayi3;
								}
								
										
								
								?>
								</p>
							</div>
						</div>
						<div class="cards text-white bg-primary mb-3" style="max-width: 22rem;display: inline-block;">
							<div class="card-header">2022 toplam satış</div>
							<div class="card-body">
								<h5 class="card-title"></h5>
								<hr>
								<p class="card-text">
								<?php 
							
					
								$baglan=mysqli_connect("localhost","root","","kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT concat((SUM(satislar.ocak) + SUM(satislar.subat) + SUM(satislar.mart) + SUM(satislar.nisan) + SUM(satislar.mayis) + SUM(satislar.haziran) + SUM(satislar.temmuz) + SUM(satislar.agustos) + SUM(satislar.eylul) + SUM(satislar.ekim) + SUM(satislar.kasim) + SUM(satislar.aralik)),' Adet Ürün') as toplam_satis_2022 from satislar;";
								$result1 = mysqli_query($baglan, $sql);
								
								
								while($row = mysqli_fetch_array($result1)){                                             
									$sayi1 = substr($row[0],0,3);
									$sayi2 = substr($row[0],3,3);
									$sayi3 = substr($row[0],6,8);                                        
									echo $sayi1.".".$sayi2.".".$sayi3;
								}
								
										
								
								?>
								</p>
							</div>
						</div>
						<div  style="display: flex; margin-left: 55px; margin-top: 55px;justify-content:center;">
						<div class="pieChart" style="position:relative;display:inline-block;">
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
										
										?>, "#CD104D"],
										["Kasım", <?php 		
										$baglan=mysqli_connect("localhost","root","","kds");
										$baglan->set_charset("utf8");
										$sql = "SELECT SUM(satislar.kasim) as kasim from satislar;";
										$result1 = mysqli_query($baglan, $sql);
										while($row = mysqli_fetch_array($result1)){                                             
										echo $row[0];
										}
										
										?>, "#E14D2A"],
										["Aralık", <?php 		
										$baglan=mysqli_connect("localhost","root","","kds");
										$baglan->set_charset("utf8");
										$sql = "SELECT SUM(satislar.aralik) as aralik from satislar;";
										$result1 = mysqli_query($baglan, $sql);
										while($row = mysqli_fetch_array($result1)){                                             
										echo $row[0];
										}
										
										?>, "#FD841F"],
										
									]);

									var view = new google.visualization.DataView(data);
									view.setColumns([0, 1,
													{ calc: "stringify",
														sourceColumn: 1,
														type: "string",
														role: "annotation" },
													2]);

									var options = {
										title: "Son 3 ayda satılan ürün sayısı grafiği",
										width: 600,
										height: 400,
										bar: {groupWidth: "30%"},
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
