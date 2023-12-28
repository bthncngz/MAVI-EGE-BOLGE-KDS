<!DOCTYPE html>
<html lang="en">

<head>
    <title>EXPRESS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
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
    <section class="vh-100" style="display: flex;justify-content: center;align-items:center;height:850px;">
        <div class="container-fluid" style="align-items: center;">
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4" style="display: flex; justify-content:center; width:226px;">
                        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                        <a href="index.html"><img src="assets/img/EXPRESS.png" alt="Klorofil Logo" class="img-responsive logo"></a>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <!-- <form style="width: 23rem;"> -->
                        <div style="width:  23rem;">
                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            <div class="form-outline mb-4">
                                <input type="text" id="username" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Kullanıcı Adı</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Şifre</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button onclick="login()" class="btn btn-info btn-lg btn-block" style="background-color: #FF6142;">Giriş yap</button>
                            </div>
                        </div>


                        <!-- </form> -->

                    </div>

                </div>

            </div>
        </div>
    </section>
</body>

<script>
    function login() {
        let username = document.getElementById("username").value;
        let password = document.getElementById("password").value;


        $.ajax({
            url: "./login_data.php",
            type: "POST",
            data: {
                kullaniciAdi: username,
                sifre: password
            },
            success: (function(response) {
                if (response == 1) {
                    window.location.replace("./index.php");
                } else {
                    alert(response);
                }
            })
        });


    }
</script>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

</html>