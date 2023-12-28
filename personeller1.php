<?php

            $baglan=mysqli_connect("localhost","root","","kds");
            $baglan->set_charset("utf8");

            if($baglan){
                if($_POST){

                    if($_POST["magaza"]){
                        $magaza=$_POST["magaza"];
                        //$intpas = (int) $pas;
                    }else{
                        die("MAGAZA değişkeni gelmedi");
                    }


                    if($_POST["personel_ad"]){
                        $personel_ad=$_POST["personel_ad"];
                        //$intsut = (int) $sut;
                    }else{
                        die("personel_ad değişkeni gelmedi");
                    }


                    if($_POST["personel_soyad"]){
                        $personel_soyad=$_POST["personel_soyad"];
                        //$intdribling = (int) $dribling;
                    }else{
                        die("personel_soyad değişkeni gelmedi");
                    }
                    if($_POST["personel_tc"]){
                        $personel_tc=$_POST['personel_tc'];
                  
          
                    }else{
                        die("personel_tc değişkeni gelmedi");
                    }


                    if($_POST["cinsiyet"]){
                        $cinsiyet=$_POST['cinsiyet'];
                  
          
                    }else{
                        die("cinsiyet değişkeni gelmedi");
                    }


                    if($_POST["dogum"]){
                        $dogum=$_POST['dogum'];
                  
          
                    }else{
                        die("dogum değişkeni gelmedi");
                    }
                    // echo $personel_ad;
                    // echo $personel_soyad;
                    // echo $personel_tc;
                    // echo $cinsiyet;
                    // echo $magaza;
                    // echo $dogum;
                    $sorgu = mysqli_query($baglan,"INSERT INTO `personeller_2022` (`magaza_id`, `personel_tc`, `cinsiyet_id`, `personel_ad`, `personel_soyad`, `dogum_tarihi`) VALUES ('".$magaza."','".$personel_tc."','".$cinsiyet."','".$personel_ad."','".$personel_soyad."','".$dogum."');");
                    // $sorgu = mysqli_query($baglan,"INSERT INTO personeller_2022 (mağaza_id, personel_tc, cinsiyet_id, personel_ad, personel_soyad, dogum_tarihi) VALUES (1,'40904154478',1,'metehan','bayhan','2001-07-19');");
                    
                    if($sorgu===TRUE){
                        //echo "<script type='text/javascript'>alert('kayıt gerçekleşti');</script>";
                        echo "kayıt gerçekleşti";
                        echo "</br></br></br>";
                        echo "yönlendiriliyorsunuz...";
                    }else{
                        die("hata".$baglan->error);
                    }
                }else{
                    die("post işlemi gerçekleşmedi");
                }

                mysqli_close($baglan);


            }else{
                die("bağlantı yapılamadı");
            }
            header("Refresh: 0; personeller.php")

        ?>