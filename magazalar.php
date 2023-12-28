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
	<link rel="stylesheet" href="magaza.css">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.1/chart.min.js"
		integrity="sha512-MC1YbhseV2uYKljGJb7icPOjzF2k6mihfApPyPhEAo3NsLUW0bpgtL4xYWK1B+1OuSrUkfOTfhxrRKCz/Jp3rQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Anasayfa</span></a>
						</li>
						<li><a href="urunler.php" class=""><i class="lnr lnr-shirt"></i> <span>Ürünler</span></a></li>
						<li><a href="satislar.php" class=""><i class="lnr lnr-cart"></i> <span>Satışlar</span></a></li>
						<li><a href="magazalar.php" class=""><i class="lnr lnr-pushpin"></i> <span>Mağazalar</span></a>
						</li>
						<li><a href="personeller.php" class=""><i class="lnr lnr-users"></i>
								<span>Personeller</span></a></li>
						<li><a href="musteriler.php" class=""><i class="lnr lnr-smile"></i> <span>Müşteriler</span></a>
						</li>
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
					<div style="display: flex; justify-content:center;">
						<div class="cards text-white bg-primary mb-3"
							style="max-width: 30rem;position:relative;display:inline-block;margin-left: 0px;margin-bottom:50px;"">
							<div class=" card-header" style="text-align:center;">Aralık ayında en az satış yapan mağaza</div>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<hr>
							<p class="card-text" style="text-align:center;">
								<?php


								$baglan = mysqli_connect("localhost", "root", "", "kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT magazalar.magaza_ad, satislar.aralik from magazalar,satislar WHERE magazalar.magaza_id=satislar.magaza_id and satislar.aralik = (SELECT min(satislar.aralik) from satislar) GROUP BY magazalar.magaza_id;";
								$result1 = mysqli_query($baglan, $sql);


								while ($row = mysqli_fetch_array($result1)) {
									echo $row[0];
								}



								?>
							</p>
						</div>
					</div>
					<div class="cards text-white bg-primary mb-3" style="max-width: 30rem;display: inline-block;">
						<div class="card-header" style="text-align:center;">Aralık ayında en çok satış yapan mağaza
						</div>
						<div class="card-body">
							<h5 class="card-title"></h5>
							<hr>
							<p class="card-text" style="text-align:center;">
								<?php


								$baglan = mysqli_connect("localhost", "root", "", "kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT magazalar.magaza_ad, satislar.aralik from magazalar,satislar WHERE magazalar.magaza_id=satislar.magaza_id and satislar.aralik = (SELECT MAX(satislar.aralik) from satislar) GROUP BY magazalar.magaza_id;";
								$result1 = mysqli_query($baglan, $sql);


								while ($row = mysqli_fetch_array($result1)) {
									echo $row[0];
								}



								?>
							</p>
						</div>
					</div>
				</div>
				<div class="pieChart" style="margin-left: 25px;display:inline-block;float:left;">
					<html>

					<head>
						<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
						<script type="text/javascript">
							google.charts.load("current", {
								packages: ['corechart']
							});
							google.charts.setOnLoadCallback(drawChart);

							function drawChart() {
								var data = google.visualization.arrayToDataTable([
									["Element", "Density", {
										role: "style"
									}],
									["Bornova Mağazası", <?php
									$baglan = mysqli_connect("localhost", "root", "", "kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as satışlar from magazalar, satislar WHERE magazalar.magaza_id=satislar.magaza_id group BY magazalar.magaza_id order BY satışlar desc limit 1;";
									$result1 = mysqli_query($baglan, $sql);
									while ($row = mysqli_fetch_array($result1)) {
										echo $row[0];
									}

									?>, "#1C315E"],
								["Muğla Mağazası", <?php
								$baglan = mysqli_connect("localhost", "root", "", "kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as satışlar from magazalar, satislar WHERE magazalar.magaza_id=satislar.magaza_id group BY magazalar.magaza_id order BY satışlar desc limit 2,1; ";
								$result1 = mysqli_query($baglan, $sql);
								while ($row = mysqli_fetch_array($result1)) {
									echo $row[0];
								}

								?>, "#227C70"],
								["Karşıyaka Mağazası", <?php
								$baglan = mysqli_connect("localhost", "root", "", "kds");
								$baglan->set_charset("utf8");
								$sql = "SELECT SUM(satislar.ocak+satislar.subat+satislar.mart+satislar.nisan+satislar.mayis+satislar.haziran+satislar.temmuz+satislar.agustos+satislar.eylul+satislar.ekim+satislar.kasim+satislar.aralik) as satışlar from magazalar, satislar WHERE magazalar.magaza_id=satislar.magaza_id group BY magazalar.magaza_id order BY satışlar desc limit 3,1; ";
								$result1 = mysqli_query($baglan, $sql);
								while ($row = mysqli_fetch_array($result1)) {
									echo $row[0];
								}

								?>, "#88A47C"],


								]);

								var view = new google.visualization.DataView(data);
								view.setColumns([0, 1,
									{
										calc: "stringify",
										sourceColumn: 1,
										type: "string",
										role: "annotation"
									},
									2
								]);

								var options = {
									title: "En Çok Satış Yapan 3 Mağaza",
									width: 500,
									height: 350,
									bar: {
										groupWidth: "50%"
									},
									legend: {
										position: "none"
									},
								};
								var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
								chart.draw(view, options);
							}
						</script>
					</head>

					<body>
						<div id="columnchart_values" style=" box-shadow: 3px 7px #888888; width: 500px; height: 350px;">
						</div>
					</body>

					</html>
				</div>
				<div class="chart1" id="graph2"
					style="display:flex;text-align: center; justify-content: center; width:550px;">
					<div
						style="justify-content:center; display:flex; padding-top: 25px;height:350px; width:500px;box-shadow: 3px 7px 1px#888888; background-color:white;">


						<!-- <form action="./magazalar1.php" method="post"> -->
						<div>
							<div style="padding-top: 25px;">
								<label for="" style='color:black;'>MAĞAZA EKLE</label>
							</div>
							<div style="padding-top:30px;;">
								<label for="" style='color:black;padding-right:5px;'>Lütfen İl Seçiniz:</label>
								<select for="" onchange="getIlceler()" name="iller" id="selectIller"
									style="padding-right:10px;">
									<?php

									$baglan = mysqli_connect("localhost", "root", "", "kds");
									$baglan->set_charset("utf8");
									$sql = "SELECT iller.il_ad from iller;";
									$result1 = mysqli_query($baglan, $sql);

									$options = "";
									$x = 1;

									while ($row = mysqli_fetch_array($result1)) {
										$options = $options . "<option value='" . $x . "'>$row[0]</option>";
										$x++;
									}
									echo $options;
									?>
								</select>
							</div>
							<div id="divIlce" style="padding-top:20px; padding-left:8px; display:none">
								<label for="" style='color:black;'>İlçe seciniz:</label>
								<select name="ilce_id" id="selectIlce" style="width:150px;">
									<option value="0">Lütfen ilçe seçiniz</option>
								</select>
							</div>
							<div id="divMagaza" style="padding-top: 25px; display:none">
								<label for="magaza" style='color:black;'>Mağaza adi:</label>
								<input type="text" id="inputMagazaAdi" name="magaza_ad" placeholder="Mağaza Adı">
							</div>
							<div style="padding-top: 25px;padding-left: 25px;float:right;">
								<button onclick="magazaEkle()"
									style="background-color: #89C4E1;color:black;width:156px;">EKLE</button>
							</div>
						</div>
						<!-- </form> -->


					</div>

				</div>

				<div style="display:flex;">
					<div class="urunler-list"
						style="display:flex; width:500px; height:500px;text-align: center;padding-left:5px;">
						<div style="margin-top: 50px;justify-content: center; padding:20px;">
							<?php

							$baglan = mysqli_connect("localhost", "root", "", "kds");
							$baglan->set_charset("utf8");
							$resultSet = mysqli_query($baglan, "SELECT magazalar.magaza_id, iller.il_ad,ilceler.ilce_ad,magazalar.magaza_ad from magazalar,ilceler,iller where magazalar.ilce_id=ilceler.ilce_id and magazalar.il_id=iller.il_id group BY magazalar.magaza_id;");

							echo "<table border=2 style='width:500px; text-align: center;background-color:#FFF5E4'>";
							echo "
								<tr>
									<th style='text-align: center; color:black;'>Mağaza Id</th>
									<th style='text-align: center; color:black;'>İl Adı</th>
									<th style='text-align: center; color:black;'>İlçe Adı</th>
									<th style='text-align: center; color:black;'>Mağaza Adı</th>
									
								</tr>
								
								
								
								
								";
							if (mysqli_num_rows($resultSet) > 0) {
								while ($row = mysqli_fetch_assoc($resultSet)) {
									echo "<tr>";
									echo "<td>" . $row["magaza_id"] . "</td>" . "<td>" . $row["il_ad"] . "<td>" . $row["ilce_ad"] . "</td>" . "<td>" . $row["magaza_ad"] . "</td>";
									echo "</tr>";
								}
							}
							echo "</table>";


							?>
						</div>
					</div>
					<div class="chart1" id="graph2"
						style="width:550px;text-align:center;justify-content:center;padding:50px;">
						<div
							style="display:flex; padding-top: 25px;height:350px; width:500px;box-shadow: 3px 7px 1px#888888; background-color:white;justify-content:center;text-align:center;">
							<form action="magazalar2.php" method="post">
								<div style="padding-top: 25px;">
									<label for="" style='color:black;'>MAĞAZA SİL</label>
								</div>

								<div style="padding-top: 50px;">
									<label for="" style='color:black;'>Mağaza adi:</label>

									<select name="magaza_ad" id="" style="width:150px;">
										<option value="0">Lütfen mağaza seçiniz</option>
										<?php
										$baglan = mysqli_connect("localhost", "root", "", "kds");
										$baglan->set_charset("utf8");
										$sql = "SELECT magazalar.magaza_ad from magazalar group by magazalar.magaza_id;";
										$result = mysqli_query($baglan, $sql);

										$options = "";
										while ($row = mysqli_fetch_array($result)) {
											$options = $options . "<option value='" . $row[0] . "'>$row[0]</option>";
										}
										echo $options;

										?>
									</select>
								</div>
								<div style="padding-top: 25px;padding-left: 25px;float:right;">
									<button type="submit"
										style="background-color: #89C4E1;color:black;width:156px;">Sil</button>
								</div>
							</form>
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

<script>
	function getIlceler() {
		let ilId = document.getElementById("selectIller").value;
		let divIlce = document.getElementById("divIlce");
		let selectIlce = document.getElementById("selectIlce");
		let divMagaza = document.getElementById("divMagaza");

		$.ajax({
			url: "./magazalar1.php",
			type: "GET",
			data: {
				ilId: ilId
			},
			success: function (response) {
				$('#selectIlce option:not(:first)').remove();
				ilceler = JSON.parse(response);
				ilceler.forEach(element => {
					selectIlce.add(new Option(element.ilce_ad, element.ilce_id));
				});

				divIlce.style.display = "block";
				divMagaza.style.display = "block";
			}

		});

	}

	function magazaEkle() {
		let selectIller = document.getElementById("selectIller");
		let selectIlce = document.getElementById("selectIlce");
		let inputMagazaAdi = document.getElementById("inputMagazaAdi");

		$.ajax({
			url: "./magazalar1.php",
			data: {
				ilId: selectIller.value,
				ilceId: selectIlce.value,
				magazaAdi: inputMagazaAdi.value
			},
			type: "POST",
			success: function (response) {
				if (response != 1) {
					alert(response);
				} else {
					window.location.reload();
				}
			}
		});
	}
</script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
	integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

</html>