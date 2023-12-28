<?php
$baglan = mysqli_connect("localhost", "root", "", "kds");
$baglan->set_charset("utf8");

if (!$baglan) {
    die("Bağlantı yapılamadı: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["ilId"], $_POST["ilceId"], $_POST["magazaAdi"])) {
        $iller = (int)$_POST["ilId"];
        $ilce_id = (int)$_POST["ilceId"];
        $magaza_ad = mysqli_real_escape_string($baglan, $_POST["magazaAdi"]);

        $sorgu = $baglan->prepare("INSERT INTO `magazalar`(`il_id`, `ilce_id`, `magaza_ad`) VALUES (?, ?, ?)");
        $sorgu->bind_param("iis", $iller, $ilce_id, $magaza_ad);

        if ($sorgu->execute()) {
            echo 1;
        } else {
            echo "Bir hata oluştu lütfen tekrar deneyiniz: " . $sorgu->error;
        }

        $sorgu->close();
    } else {
        die("POST verileri eksik");
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET["ilId"])) {
        $ilId = (int)$_GET["ilId"];
        $sorgu = mysqli_query($baglan, "SELECT * FROM ilceler WHERE il_id = $ilId;");

        if ($sorgu) {
            $ilceler = array();
            while ($row = mysqli_fetch_assoc($sorgu)) {
                $ilceler[] = $row;
            }
            echo json_encode($ilceler);
        } else {
            echo "İlçeler getirilirken bir hata oluştu: " . mysqli_error($baglan);
        }
    } else {
        die("GET verileri eksik");
    }
} else {
    die("Geçersiz istek türü");
}

mysqli_close($baglan);
?>