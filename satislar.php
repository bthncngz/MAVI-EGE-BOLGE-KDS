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
            <div class="brand">
			<a href="index.php"><img src="fotoğraflar/mavi.jpg" alt="Mavi" class="mavi-resim"></a>
                </a>
            </div>
        </nav>
			</div>
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
					<iframe src="https://www.google.com/maps/d/embed?mid=1U5F2H8b-P-U95YfMfd-AdxMR4c2IJrI&ehbc=2E312F" width="640" height="480"></iframe>
					
					</div>
					<div class="urunler-list" style="display: flex; height:700px; width:100%; text-align: center; justify-content: center; padding-bottom:100px;">
						<div style="margin-top: 50px;justify-content: center; padding:20px;">
							<?php 
							
							$baglan=mysqli_connect("localhost","root","","kds");
							$baglan->set_charset("utf8");
							$resultSet = mysqli_query($baglan,"SELECT urunler.urun_ad, SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik)as urun_satis_sayisi from urunler,satislar WHERE satislar.urun_id=urunler.urun_id group BY urunler.urun_id order by urun_satis_sayisi asc limit 25;") ;    
						
							echo "<table border=2 style='width:800px; height:500px;text-align: center;'>";
							echo    "
							<tr>
								<th style='text-align: center; color:black;'>Ürün Adı</th>
								<th style='text-align: center; color:black;'>Satış Sayısı</th>
								
								
							</tr>
							
							
							
							
							";
							if(mysqli_num_rows($resultSet)>0){
								while($row=mysqli_fetch_assoc($resultSet)){
									echo "<tr>";
									echo "<td>".$row["urun_ad"]."</td>"."<td>".$row["urun_satis_sayisi"]."</td>";
									echo "</tr>";
								}
							}
							echo "</table>";
									
							
							?>
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
