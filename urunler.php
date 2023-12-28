<!doctype html>
<html lang="en">

<head>
	<title>MAVI</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.1/chart.min.js" integrity="sha512-MC1YbhseV2uYKljGJb7icPOjzF2k6mihfApPyPhEAo3NsLUW0bpgtL4xYWK1B+1OuSrUkfOTfhxrRKCz/Jp3rQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
			<a href="index.php"><img src="fotoğraflar/mavi.jpg" alt="Mavi" class="mavi-resim"></a>
                </a>
            </div>
        </nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
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
				<div class="container-fluid" style="display:block;">
					<div class="pieChart" style="margin-left: 25px;display:inline-block;float:left;">
						<html>
							<head>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script type="text/javascript">
								google.charts.load("current", {packages:['corechart']});
								google.charts.setOnLoadCallback(drawChart);
								function drawChart() {
								var data = google.visualization.arrayToDataTable([
									["Element", "Density", { role: "style" } ],
									["Kadın Kırmızı Kadife Elbise",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi desc limit 1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#0081C9"],
									["Kadın Siyah Saten Gömlek",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi desc limit 2,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#5BC0F8"],
									["Kadın Lacivert Blazer Ceket",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi desc LIMIT 2,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#86E5FF"],
									["Kadın Beyaz Oversize Blazer Ceket",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi desc LIMIT 3,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#FFC93C"],
									["Kadın baklava Desenli Süveter",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi desc LIMIT 4,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#DC0000"],
									
									
								]);

								var view = new google.visualization.DataView(data);
								view.setColumns([0, 1,
												{ calc: "stringify",
													sourceColumn: 1,
													type: "string",
													role: "annotation" },
												2]);

								var options = {
									title: "En Çok Satılan 5 Ürün",
									width: 500,
									height: 350,
									bar: {groupWidth: "50%"},
									legend: { position: "none" },
								};
								var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
								chart.draw(view, options);
							}
							</script>
							</head>
							<body>
							<div id="columnchart_values" style=" box-shadow: 3px 7px #888888; width: 500px; height: 350px;"></div>
							</body>
						</html>
					</div>
					<div class="chart1" id="graph2" style="width:500px;height:350px; position:relative; float:left;margin-left: 25px;box-shadow: 3px 7px #888888;">
						<html>
						<head>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script type="text/javascript">
							google.charts.load("current", {packages:["corechart"]});
							google.charts.setOnLoadCallback(drawChart);
							function drawChart() {
							var data = google.visualization.arrayToDataTable([
								["Element", "Density", { role: "style" } ],
								["Kadın Krem Sweater",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi asc limit 1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#DC0000"],
									["Kadın Pembe Saten Takım Elbise",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi asc limit 1,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#FFC93C"],
									["Erkek Beyaz T-shirt",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi asc LIMIT 2,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#86E5FF"],
									["Kadın  Yeşil Kadife Etek",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi asc LIMIT 3,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#5BC0F8"],
									["Erkek Gri Atkı",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from satislar, urunler where satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi asc LIMIT 4,1; ";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#0081C9"],
							]);

							var view = new google.visualization.DataView(data);
							view.setColumns([0, 1,
											{ calc: "stringify",
												sourceColumn: 1,
												type: "string",
												role: "annotation" },
											2]);

							var options = {
								title: "En Az Satılan 5 Ürün",
								width: 500,
								height: 350,
								bar: {groupWidth: "65%"},
								legend: { position: "none" },
							};
							var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
							chart.draw(view, options);
						}
						</script>
						
						</head>
						<body>
							<div id="barchart_values" style="width: 500px; height: 350px;"></div>
						</body>
						</html>
					</div>
					
					
					

				</div>
				<div class="urunler-list" style="display:flex; height:500px; width:100%; text-align: center; justify-content: center;;">
					<div style="margin-top: 50px;justify-content: center; padding:20px;">
						<?php 
						
						$baglan=mysqli_connect("localhost","root","","kds");
						$baglan->set_charset("utf8");
						$resultSet = mysqli_query($baglan,"SELECT urunler.urun_id, urunler.urun_ad, urunler.fiyat, SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as urun_satis_sayisi from urunler,satislar WHERE satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi asc;") ;    
					
						echo "<table border=2 style='width:800px; text-align: center;background-color:#86E5FF;'>";
						echo    "
						<tr>
							<th style='text-align: center; color:black;'>İd</th>
							<th style='text-align: center; color:black;'>Ürün Adı</th>
							<th style='text-align: center; color:black;'>Fiyat</th>
							<th style='text-align: center; color:black;'>Toplam Satışlar</th>
							
						</tr>
						
						
						
						
						";
						if(mysqli_num_rows($resultSet)>0){
							while($row=mysqli_fetch_assoc($resultSet)){
								echo "<tr>";
								echo "<td>".$row["urun_id"]."</td>"."<td>".$row["urun_ad"]."</td>"."<td>".$row["fiyat"]."</td>"."<td>".$row["urun_satis_sayisi"]."</td>";
								echo "</tr>";
							}
						}
						echo "</table>";
								
						
						?>
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
