<?php
$baglan = mysqli_connect("localhost", "root", "", "kds");
$baglan->set_charset("utf8");

if (!$baglan) {
    die("Bağlantı yapılamadı: " . mysqli_connect_error());
}

if ($_POST) {
    if (!isset($_POST["magaza_ad"])) {
        die("magaza_ad değişkeni gelmedi");
    }

    $magaza_ad = mysqli_real_escape_string($baglan, $_POST["magaza_ad"]);

    $sorgu = "DELETE FROM magazalar WHERE magazalar.magaza_ad = '$magaza_ad';";

    if (mysqli_query($baglan, $sorgu)) {
        echo "Kayıt SILINDI";
        echo "</br></br></br>";
        echo "Yönlendiriliyorsunuz...";
        sleep(2); // Bekleme süresi
        header("Refresh: 0; magazalar.php");
    } else {
        die("Sorgu hatası: " . mysqli_error($baglan));
    }
} else {
    die("POST işlemi gerçekleşmedi");
}

mysqli_close($baglan);
?>

<!-- HTML kodu PHP bloğunun dışında olmalı -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="magaza.css">
