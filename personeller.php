<!doctype html>
<html lang="en">

<head>
	<style>
        /* personeller.php içinde label etiketleri için stil tanımı */
        label {
            color: #333; /* veya istediğiniz renk değeri */
        }
    </style>


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
					
				<div class="urunler-list" style="display:flex; width:1100px; text-align: center; justify-content: center;">
					<div style="margin-top: 50px;justify-content: center; padding:20px;display:flex; ">
						<?php 
						
						$baglan=mysqli_connect("localhost","root","","kds");
						$baglan->set_charset("utf8");
						$resultSet = mysqli_query($baglan,"SELECT concat(personeller_2022.personel_ad, ' ', personeller_2022.personel_soyad) as ad_soyad, 
						magazalar.magaza_ad,
						SUM(personel_satis_2022.ocak + personel_satis_2022.subat + personel_satis_2022.mart + personel_satis_2022.nisan + personel_satis_2022.haziran + personel_satis_2022.temmuz + personel_satis_2022.agustos + personel_satis_2022.eylul + personel_satis_2022.ekim + personel_satis_2022.kasim + personel_satis_2022.aralik) as toplam_satis,
						SUM(personel_satis_2022.mayis) as mayis
				 FROM personeller_2022, magazalar, personel_satis_2022 
				 WHERE personeller_2022.personel_id = personel_satis_2022.personel_id 
					 AND personel_satis_2022.magaza_id = magazalar.magaza_id 
				 GROUP by personeller_2022.personel_id 
				 ORDER BY toplam_satis DESC 
				 LIMIT 5; ") ;    
					
						echo "<table border=2 style='width:800px; text-align: center;background-color:#A4BE7B;'>";
						echo    "
						<tr style='color:black;'>
							<th style='text-align: center; color:black;'>Personel Ad ve Soyad</th>
							<th style='text-align: center; color:black;'>Mağaza Adı</th>
							<th style='text-align: center; color:black;'>Satış</th>
							<th style='text-align: center; color:black;'>Satış Başarısı</th>
						</tr>
						
						
						
						
						";
						if(mysqli_num_rows($resultSet)>0){
							while($row=mysqli_fetch_assoc($resultSet)){
								$oneri = "";
								if((int) $row["toplam_satis"] >= 47500){
									$oneri = "2 Maaş ikramiye";
								}else{
									$oneri = "Normal Satış düzeyi";
								}
								$sayi1 = substr($row["toplam_satis"],0,2);
								$sayi2 = substr($row["toplam_satis"],2,3);         
								echo "<tr style='text-align: center; color:black;'>";
								echo "<td>".$row["ad_soyad"]."</td>"."<td>".$row["magaza_ad"]."</td>"."<td>".$sayi1.".".$sayi2."</td>"."<td>".$oneri."</td>";
								echo "</tr>";
							}
						}
						echo "</table>";
								
						
						?>
					</div>	
				</div>
				<div class="urunler-list" style="display:flex; width:1100px; text-align: center; justify-content: center">
					<div style="margin-top: 50px;justify-content: center; padding:20px;display:flex; " >
						<?php 
						
						$baglan=mysqli_connect("localhost","root","","kds");
						$baglan->set_charset("utf8");
						$resultSet = mysqli_query($baglan,"SELECT concat(personeller_2022.personel_ad,'  ' ,personeller_2022.personel_soyad)as ad_soyad, magazalar.magaza_ad, SUM(personel_satis_2022.ocak+personel_satis_2022.subat+personel_satis_2022.mart+personel_satis_2022.nisan+personel_satis_2022.mayis+personel_satis_2022.haziran+personel_satis_2022.temmuz+personel_satis_2022.agustos+personel_satis_2022.eylul+personel_satis_2022.ekim+personel_satis_2022.kasim+personel_satis_2022.aralik) as toplam_satis FROM personeller_2022, magazalar, personel_satis_2022 WHERE personeller_2022.personel_id=personel_satis_2022.personel_id AND personel_satis_2022.magaza_id=magazalar.magaza_id GROUP by personeller_2022.personel_id order BY toplam_satis ASC limit 5; ") ;    
					
						echo "<table border=2 style='width:800px; text-align: center;background-color:#F7A4A4;'>";
						echo    "
						<tr style='color:black;'>
							<th style='text-align: center; color:black;'>Personel Ad ve Soyad</th>
							<th style='text-align: center; color:black;'>Mağaza Adı</th>
							<th style='text-align: center; color:black;'>Satış</th>
							<th style='text-align: center; color:black;'>Satış Başarısı</th>
						</tr>
						
						
						
						
						";
						if(mysqli_num_rows($resultSet)>0){
							while($row=mysqli_fetch_assoc($resultSet)){
								$oneri = "";
								if((int) $row["toplam_satis"] <= 40500){
									$oneri = "Performans Düşüklüğü";
								}else{
									$oneri = "Normal Satış düzeyi";
								}
								$sayi1 = substr($row["toplam_satis"],0,2);
								$sayi2 = substr($row["toplam_satis"],2,3);         
								echo "<tr style='text-align: center; color:black;'>";
								echo "<td>".$row["ad_soyad"]."</td>"."<td>".$row["magaza_ad"]."</td>"."<td>".$sayi1.".".$sayi2."</td>"."<td>".$oneri."</td>";
								echo "</tr>";
							}
						}
						echo "</table>";
								
						
						?>
					</div>	
				</div>
				<div class="formdiv" style="margin-top: 50px;justify-content: center; padding:20px;display:flex;">
					<form action="personeller1.php" method="post" style="display: inline-block;justify-content:center;padding: 20px; background-color: #F7F5EB;box-shadow: 3px 7px 1px#888888;">
						<div class="Magaza">
							<label for="">Magaza Seciniz :</label>
							<select name="magaza" id="magaza" style="width:150px;">
									
									<option value="0">Lütfen Mağaza Seçiniz</option>

										<?php
                  
											$baglan=mysqli_connect("localhost","root","","kds");
											$baglan->set_charset("utf8");
											$sql = "SELECT magazalar.magaza_ad from magazalar;";
											$result1 = mysqli_query($baglan, $sql);

											$options = "";
											$x = 1;
											while($row = mysqli_fetch_array($result1)){
												$options = $options."<option value='".$x."'>$row[0]</option>";
												$x++;
												
											}
											echo $options;
										?>
									</select>
						</div>
						<div class="AD" style="display: block;">
							<label for="">Personel Adı:</label>
							<input type="text" name="personel_ad" placeholder="Adınız" style="margin-left: 20px;">
						</div>
						<div class="soyad" style="display: block;">
							<label for="">Personel Soyadı:</label>
							<input type="text" name="personel_soyad" placeholder="Soyadınız">
						</div>
						<div class="soyad" style="display: block;">
						<label for="">Personel TC:</label>
						<input type="text" name="personel_tc" placeholder="TC niz" style="margin-left: 25px;">
						</div>
						<div class="dogumtarih">
						<label for="">Cinsiyet Seçiniz:</label>
						<select name="cinsiyet" id="cinsiyet" style="width:150px;">
									<option value="0">Cinsiyet</option>

									<?php
                  
										$baglan=mysqli_connect("localhost","root","","kds");
										$baglan->set_charset("utf8");
										$sql = "SELECT cinsiyet_ad from cinsiyet;";
										$result1 = mysqli_query($baglan, $sql);

										$options = "";
										$x = 1;
										while($row = mysqli_fetch_array($result1)){
											$options = $options."<option value='".$x."'>$row[0]</option>";
											$x++;
											
										}
										echo $options;
									?>
									</select>
						</div>
						<div class="date">
							<label for="">Doğum Tarihi:</label>
							<input type="date" name="dogum" placeholder="YYYY-AA-GG" style="margin-left: 25px;">


						</div>
							<button type="submit"  style="margin-left: 100px;">Ekle</button>
						

						</div>
					</form>

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
