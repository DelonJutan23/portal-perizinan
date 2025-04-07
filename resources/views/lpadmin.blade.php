<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal INSPIRE Universitas Sam Ratulangi">
    <meta name="keywords" content="UNSRAT, INSPIRE, Akademik, Portal, Universitas Sam Ratulangi">
    <title>INSPIRE Portal</title>
    <link rel="icon" href="https://inspire.unsrat.ac.id/resources/img/logo-unsrat.png" type="image/png">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/now-ui-kit/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/now-ui-kit/css/now-ui-kit.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/now-ui-kit/css/demo.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/additional/login.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/fonts/philosopher/philosopher.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/fonts/roboto/roboto.css">
</head>

<body class="login-page sidebar-collapse">

    <!-- Start Button -->
    <div id="container_start">
        <div class="btn_pulse_1">
            <img alt="unsrat" style="width: 4.8em;" src="https://inspire.unsrat.ac.id/resources/img/logo-unsrat.png">
        </div>
        <div class="btn_pulse_ket">Click to launch ...</div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="https://sl.unsrat.ac.id/Mj3tbC">www.unsrat.ac.id</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://storage.googleapis.com/unsrat-web/www.unsrat.ac.id/2020/11/Peraturan-Rektor-Nomor-1_Tahun_-2019.pdf">Baca Peraturan Akademik</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/UNSRAT/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://twitter.com/kampusunsrat" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/unsrat1961/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.youtube.com/channel/UCoH5uiDbLL4G1Ri7C8w3_cA" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Form -->
    <div class="page-header clear-filter" id="container_login" filter-color="orange">
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain mt-5">
                        <form action="/login/autentikasi" id="login-form" method="post">
                            <div class="text-center">
                                <img src="https://inspire.unsrat.ac.id/resources/img/inspire-logo-hd.png" title="Arti INSPIRE">
                            </div>
                            <div class="card-body mt-4">
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="now-ui-icons objects_key-25"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <a href="/cruddosen" class="btn btn-danger btn-round btn-lg btn-block mt-4">LOGIN</a>
                                <a href="https://inspire.unsrat.ac.id/reset_password">Lupa Password</a><br>
                                <a href="https://inspire.unsrat.ac.id/request_reset_password">Request Reset Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer" style="position: absolute; bottom: 0; width: 100%; text-align: center; color: white; padding: 10px 0; background: transparent; z-index: 1000;">
        <div class="container">
            <div class="copyright" id="copyright">
                © <span id="year"></span> - UPT TIK Unsrat
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("year").textContent = new Date().getFullYear();
        });
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WV2F029BHZ"></script>
    <script async src="https://www.google-analytics.com/analytics.js"></script>
    <script async src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>