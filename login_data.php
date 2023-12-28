<?php

$baglan = mysqli_connect("localhost", "root", "", "kds");
$baglan->set_charset("utf8");
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL);

if (!$baglan) {
    echo "Bağlantı başarısız";
}

if ($_POST) {
    $kullaniciAdi = $_POST["kullaniciAdi"];
    $sifre = $_POST["sifre"];

    $sorgu = mysqli_query($baglan, "SELECT * from kullanicilar where kullaniciAdi = '$kullaniciAdi' and sifre = '$sifre'");

    $obj = mysqli_fetch_object($sorgu);
    if ($obj === null) {
        echo "Kullanıcı adı veya sifre hatalı";
    } else {
        echo 1;
    }
}
