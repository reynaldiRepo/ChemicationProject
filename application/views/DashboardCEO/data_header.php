<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CEO Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
       <link rel="shortcut icon" href="<?php echo base_url('assets/img/Homepage/Logo/chemication.png')?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/bootstrap.min.css')?>">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/font-awesome.min.css')?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/owl.theme.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/owl.transitions.css')?>">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/meanmenu/meanmenu.min.css')?>">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/notika-custom-icon.css')?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css')?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/animate.css')?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/normalize.css')?>">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/wave/waves.min.css')?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/main.css')?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/style.css')?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/responsive.css')?>">
    <!-- modernizr JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/vendor/modernizr-2.8.3.min.js')?>"></script>



    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/bootstrap-select/bootstrap-select.css')?>">
    <!-- datepicker CSS
            ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/CEO/Dashboard/css/datapicker/datepicker3.css')?>">
</head>

<body>
    <!-- Start Header Top Area -->
     <!-- Start Header Top Area -->
     <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                   <a href="#"><img src ="<?php echo base_url('assets/CEO/img/Homepage/Dashboard_Logo.png')?>" alt="" width="50" height="34"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->

    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Dashboard</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="<?php echo base_url('Home/DashboardCEO')?>">Home</a></li>
                                        <li><a href="<?php echo base_url('Home/DashboardCEO')?>">FAQ</a></li>
                                        <li><a href="<?php echo base_url('Home/DashboardCEO')?>">Jadwal</a></li>
                                        <li><a href="<?php echo base_url('Home/Dashboard_CBT')?>">CBT (Test Online)</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Informasi Tim</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="<?php echo base_url('Home/KetuaCEO')?>">Data Ketua dan Anggota</a></li>
                                        <li><a href="<?php echo base_url('Home/PembayaranCEO')?>">Pembayaran</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Akun</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="<?php echo base_url('Home/InformasiAkun')?>">Informasi Akun</a></li>
                                        <li><a href="<?php echo base_url('Home/LogoutCEO')?>">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->


    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i>
                                Dashboard</a>
                        </li>
                        <li class="active"><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-edit"></i> Informasi
                                Tim</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="fa fa-group"></i> Akun</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                            <li><a href="<?php echo base_url('Home/DashboardCEO')?>">Home</a>
                                </li>
                                <li><a href="<?php echo base_url('Home/DashboardCEO')?>">FAQ</a>
                                </li>
                                <li><a href="<?php echo base_url('Home/DashboardCEO')?>">Jadwal</a>
                                </li>
                                <li><a href="<?php echo base_url('Home/Dashboard_CBT')?>">CBT (Test Online)</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo base_url('Home/KetuaCEO')?>">Data Ketua & Anggota</a>
                                </li>
                                <li><a href="<?php echo base_url('Home/PembayaranCEO')?>">Pembayaran</a>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo base_url('Home/InformasiAkun')?>">Informasi Akun</a>
                                </li>
                                <li><a href="<?php echo base_url('Home/Logout')?>">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Main Menu area End-->