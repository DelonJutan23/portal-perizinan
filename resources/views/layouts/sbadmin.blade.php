<html style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INSPIRE Portal</title>
    <link rel="icon" href="https://inspire.unsrat.ac.id/resources/img/logo-unsrat.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal INSPIRE Universitas Sam Ratulangi">
    <meta name="keywords" content="INSPIRE, UNSRAT, inspire, Universitas, Sam, Ratulangi, Universitas Sam Ratulangi, portal inspire, Portal Inspire UNSRAT">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/fonts/philosopher/philosopher.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/css/tik_unsrat.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/css/datatables.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/additional/layout.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/css/personal_page.css">
    <link rel="stylesheet" type="text/css" src="https://inspire.unsrat.ac.id/resources/additional/beranda.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/fullcalendar-latest/lib/main.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <title>@yield('title', 'Sistem Perizinan')</title>
</head>

<body class="layout-navbar-fixed layout-fixed">

    <canvas id="container_fireworks" style="display: none;">
    </canvas>

    <span id="main_content">
        <div id="loading-container" style="display: none;">
            <div id="loading">
                <img alt="unsrat" id="loading-logo" src="https://inspire.unsrat.ac.id/resources/img/unsrat_mosaic.png">
                memuat ..
            </div>
        </div>
        <div id="alert_js"></div>
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </nav>

            <aside class="main-sidebar sidebar-light-danger elevation-4">
                <a href="" class="brand-link bg-danger">
                    <img src="https://inspire.unsrat.ac.id/resources/img/logo-unsrat-mosaic.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                    <span class="brand-text font-weight-light" style="font-size: 15pt" id="navbar-title">INSPIRE</span>
                </a>
                <div class="wrapper">
                    <div class="sidebar">
                        <nav class="mt-4">
                            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column text-sm" data-widget="treeview" role="menu" data-accordion="true">
                                <li class="nav-item">
                                    <a href="/cruddosen" class="nav-link" id="nav-dosen">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>Pengguna</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/crudmatkul" class="nav-link" id="nav-matkul">
                                        <i class="nav-icon fas fa-book"></i>
                                        <p>Mata Kuliah</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>

            <!-- MAIN CONTENT -->
            <div class="content-wrapper" style="min-height: 760.03125px;">
                @yield('content')
            </div>
            <div id="sidebar-overlay"></div>
        </div>
    </span>

    <footer class="main-footer text-sm">
        <strong>Copyright © 2025 UPT-TIK UNSRAT</strong> * All rights reserved. <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.70.7
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const path = window.location.pathname;

            // Ambil semua nav-link dalam sidebar
            const navLinks = document.querySelectorAll('.nav-sidebar .nav-link');

            navLinks.forEach(link => {
                if (path === link.getAttribute('href')) {
                    // Hapus class active dari semua
                    navLinks.forEach(l => l.classList.remove('active'));
                    // Tambahkan ke yang cocok
                    link.classList.add('active');
                }
            });
        });
    </script>

    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-WV2F029BHZ&amp;cx=c&amp;_slc=1"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-K1MTZDKJT5&amp;cx=c&amp;_slc=1"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-K1MTZDKJT5&amp;l=dataLayer&amp;cx=c&amp;gtm=457e53d0za200&amp;tag_exp=102308675~102482433~102587591~102717422~102788824~102813109~102814060~102825837~102879719"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-WV2F029BHZ&amp;l=dataLayer&amp;cx=c&amp;gtm=457e53d0za200&amp;tag_exp=102308675~102482433~102587591~102717422~102788824~102813109~102814060~102825837~102879719"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/dist/js/adminlte.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/dist/js/demo.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/tik_class.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/fullcalendar-latest/lib/main.js"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/jquery/jquery.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/popper/popper.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/adminlte3/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/usr_template.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/tik_function.js"></script>
    <script src="https://inspire.unsrat.ac.id/resources/js/dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>