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
</head>

<body>
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
                                        <li><a href="#faq">FAQ</a></li>
                                        <li><a href="#jadwal">Jadwal</a></li>
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
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i>
                                Dashboard</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-edit"></i> Informasi
                                Tim</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="fa fa-group"></i> Akun</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?php echo base_url('Home/DashboardCEO')?>">Home</a>
                                </li>
                                <li><a href="#faq">FAQ</a>
                                </li>
                                <li><a href="#jadwal">Jadwal</a>
                                </li>
                                <li><a href="<?php echo base_url('Home/Dashboard_CBT')?>">CBT (Test Online)</a>
                                </li>
                            </ul>
                        </div>
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
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



    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Selamat Datang di CBT (Online Test) Page</h2>
                                        <p>
                                        <div class="alert alert-info">
                                        Di laman ini peserta bisa mengakses laman untuk aplikasi CBT untuk mengerjakan soal 
                                        <b>Chemichal Engineering Olympiad</b>, Laman Test per-babak akan terbuka sesuai <b>jadwal, sesi, dan gugur tidaknya peserta</b>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="contact-info-area mg-t-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                        <div class="contact-hd sm-form-hd">
                            <h2>Tryout</h2>
                        </div>
                        <?php 
                        $id = $this->session->userdata('id');
                        $location = 'localhost/cbt.nationalchemication.com/CBT/home/'.$id.'/1';
                        if ($tryout == 'belum_dikerjakan') {?>
                        <p>Click Tombol Dibawah Untuk Memulai Test, "Selamat Mengerjakan"</p>
                        <br>
                        <button type="button" class="btn btn-info" onclick="window.location.href='http://<?php echo $location;?>'">Mulai Test</button>

                        <?php } else if($tryout == 'belum_ada_test'){?>
                        <br>
                        <div class="alert alert-warning">Belum Ada TEST online</div>
                        
                        <?php } else if($tryout == 'sudah_dikerjakan'){?>
                        <br>
                        <div class="alert alert-success">Test telah dikerjakan
                        <br>Nilai : <?php echo $nilai_to; ?></div>
                        <?php }?>
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                        <div class="contact-hd sm-form-hd">
                            <h2>Penyisihan</h2>
                        </div>
                        <?php 
                        $id = $this->session->userdata('id');
                        $location = 'localhost/cbt.nationalchemication.com/CBT/home/'.$id.'/2';
                        if ($penyisihan == 'belum_dikerjakan') {?>
                        <p>Click Tombol Dibawah Untuk Memulai Test, "Selamat Mengerjakan"</p>
                        <br>
                        <button type="button" class="btn btn-info" onclick="window.location.href='http://<?php echo $location;?>'">Mulai Test</button>

                        <?php } else if($penyisihan == 'belum_ada_test'){?>
                        <br>
                        <div class="alert alert-warning">Belum Ada TEST online</div>
                        
                        <?php } else if($penyisihan == 'sudah_dikerjakan'){?>
                        <br>
                        <div class="alert alert-success">Test telah dikerjakan
                        <br>Nilai : <?php echo $nilai_pe; ?></div>
                        <?php }?>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-info-area mg-t-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                        <div class="contact-hd sm-form-hd">
                            <h2>Semi Final</h2>
                        </div>
                        <br>
                     <div class="alert alert-info">Semi Final Dilakukan Secara Offline atau langsung di Universitas Pembangunan Veteran Jatim</div>
                        <!--<//?php if ($semifinal) {?>-->
                        <!--<p>Click Tombol Dibawah Untuk Memulai Test, "Selamat Mengerjakan"</p>-->
                        <!--<br>-->
                        <!--<button type="button" class="btn btn-info">Mulai Test</button>-->
                        <!--<//?php } else{?>-->
                        <!--<br>-->
                        <!--<div class="alert alert-warning">Tidak Ada TEST online</div>-->
                        <!--<//?php }?>-->
                </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                        <div class="contact-hd sm-form-hd">
                            <h2>Final</h2>
                        </div>
                        <br>
                        <div class="alert alert-info">Final Dilakukan Secara Offline atau langsung di Universitas Pembangunan Veteran Jatim</div>
                </div>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019 Chemicahal Engineering Olymiade.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <script>
    var warning = document.getElementById('warning_msg');
    var success = document.getElementById('success_msg');

    if (warning.innerHTML == 'kosong') {
    warning.style.display='none';
    success.style.display='';
    }else{
    warning.style.display='';
    success.style.display='none';
    }
    </script>
    <!-- jquery
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/bootstrap.min.js')?>"></script>
    <!-- wow JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/wow.min.js')?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/jquery-price-slider.js')?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/owl.carousel.min.js')?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/jquery.scrollUp.min.js')?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/meanmenu/jquery.meanmenu.js')?>"></script>
    <!-- counterup JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/counterup/jquery.counterup.min.js')?>"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/counterup/waypoints.min.js')?>"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/counterup/counterup-active.js')?>"></script>
    <!-- sparkline JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/sparkline/jquery.sparkline.min.js')?>"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/sparkline/sparkline-active.js')?>"></script>
    <!-- knob JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/knob/jquery.knob.js')?>"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/knob/jquery.appear.js')?>"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/knob/knob-active.js')?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <!-- flot JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/flot/flot-widget-anatic-active.js')?>"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/flot/chart-tooltips.j')?>s"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/flot/flot-active.js')?>"></script>
    <!--  wave JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/wave/waves.min.js')?>"></script>
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/wave/wave-active.js')?>"></script>
 
    <!-- main JS
		============================================ -->
    <script src ="<?php echo base_url('assets/CEO/Dashboard/js/main.js')?>"></script>
</body>

</html>