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
				<div class="container-fluid" style="display: inline-block;">
						
					<div class="map" style="position: relative; display: block; margin-left: 55px;">
					<iframe src="https://www.google.com/maps/d/u/0/embed?mid=145fX9WJbE_Bkxg5W9wEyOXEbna8ciBE&ehbc=2E312F" width="640" height="480"></iframe>
					
					</div>
					<div class="pieChart" style="margin-left: 25px;display:flex;justify-content:center; padding-top:50px;">
						<html>
							<head>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script type="text/javascript">
								google.charts.load("current", {packages:['corechart']});
								google.charts.setOnLoadCallback(drawChart);
								function drawChart() {
								var data = google.visualization.arrayToDataTable([
									["Element", "Density", { role: "style" } ],
									["İzmir - Narlıdere",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#0081C9"],
									["Kütahya - Gediz",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 2,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#5BC0F8"],
									["Kütahya - Hisarcık",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 3,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#86E5FF"],
									["Uşak - Karahallı",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 4,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#FFC93C"],
									["Kütahya - Merkez",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 5,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#DC0000"],
									["Muğla - Köyceğiz",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 6,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#DC0000"],
									["Muğla - Ula",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 7,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#DC0000"],
									["İzmir - Çeşme",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 8,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#DC0000"],
									["Uşak - Ulubey",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 9,1;";
									$result1 = mysqli_query($baglan, $sql);
									while($row = mysqli_fetch_array($result1)){                                             
									echo $row[0];
									}
									
									?>, "#DC0000"],
									["Manisa - Kırkağaç",<?php 		
									$baglan=mysqli_connect("localhost","root","","kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 10,1;";
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
									title: "Müşteri Potansiyeli En Yüksek 10 İlçe Grafiği",
									width: 750,
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
							<div id="columnchart_values" style=" box-shadow: 3px 7px #888888; width: 750px; height: 400px;"></div>
							</body>
						</html>
					</div>
					
					<div class="urunler-list" style="display:flex; width:1100px; text-align: center; justify-content: center">
					<div style="margin-top: 50px;justify-content: center; padding:20px;display:flex; " >
						<?php 
						
						$baglan=mysqli_connect("localhost","root","","kds");
						$baglan->set_charset("utf8");
						$resultSet = mysqli_query($baglan,"SELECT iller.il_ad, potansiyel_musteriler.ilce_ad, round(avg(potansiyel_musteriler.ekim_musteri+potansiyel_musteriler.kasim_musteri+potansiyel_musteriler.aralik_musteri)) as toplam from potansiyel_musteriler, iller where iller.il_id=potansiyel_musteriler.il_id GROUP BY potansiyel_musteriler.ilce_id order by toplam desc limit 10;") ;    
					
						echo "<table border=2 style='width:800px; text-align: center;background-color:#86E5FF;'>";
						echo    "
						<tr style='color:black;'>
							<th style='text-align: center; color:black;'>İl</th>
							<th style='text-align: center; color:black;'>İlçe</th>
							<th style='text-align: center; color:black;'>Potansiyel Müşteri</th>
							<th style='text-align: center; color:black;'>Öneri</th>

						</tr>
						
						
						
						
						";
						if(mysqli_num_rows($resultSet)>0){
							while($row=mysqli_fetch_assoc($resultSet)){
								$oneri = "";
								if((int) $row["toplam"] <= 10300){
									$oneri = "Ortalam Kar Lokasyon";
								}else{
									$oneri = "Kar Getirisi Yüksek";
								}
								$sayi1 = substr($row["toplam"],0,2);
								$sayi2 = substr($row["toplam"],2,3);         
								echo "<tr style='text-align: center; color:black;'>";
								echo "<td>".$row["il_ad"]."</td>"."<td>".$row["ilce_ad"]."</td>"."<td>".$sayi1.".".$sayi2."</td>"."<td>".$oneri."</td>";
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
