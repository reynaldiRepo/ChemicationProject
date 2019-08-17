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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-danger" id="warning_msg" ><?php echo $warning?></div>
                <div class="alert alert-success" id="success_msg"><?php echo $konfirmasi?></div>
            </div>
        </div>
    </div>


    <?php  foreach($posts as $post){ ?>
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
                                        <h2><?php echo $post->judul?></h2>
                                        <p><?php echo $post->isi?>
                                        </p>
                                        <a href ='<?php echo $post->link?>'><?php echo $post->link_judul?></a>
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
    <?php }?>

    <!-- Breadcomb area Start-->
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
                                        <h2>Selamat Datang Di CEO Dashboard</h2>
                                        <p>Selamat datang di Dashboard CEO, 
                                        Disini peserta bisa melakukan pengisian data ketua & anggota, peserta juga bisa 
                                        mendapatkan berita berita terbaru di laman Home dashboard. disini peserta juga akan mengakses 
                                        test online melalui laman <b><a href="<?php echo base_url('Home/Dashboard_CBT')?>">CBT (Test Online)</a></b>
                                        diharapkan peserta segera melengkapi Data Tim <a
                                                href="<?php echo base_url('Home/KetuaCEO')?>"><strong>disini</strong></a> atau pada menu<strong> informasi
                                                tim/Data Ketua & Anggota</strong>, dan peserta
                                            diharap segera melakukan konfirmasi pendaftaran <a
                                                href="<?php echo base_url('Home/PembayaranCEO')?>"><strong>disini</strong></a> atau pada menu<strong> informasi
                                                tim/Pembayaran</strong>
                                        </p>
                                        <br>
                                        <div class="alert alert-warning">
                                            <p>
                                                <strong>Apabila peserta tidak segera melengkapi data dan melakukan
                                                    pembayaran sebelum tanggal yang ditentukan <a href="#jadwal">disini</a>
                                                    maka peserta dianggap gugur dan akun peserta akan
                                                    dinonaktifkan</strong>
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
    </div>
    <!-- Breadcomb area End-->


    <!-- faq -->
    <div class="accordion-area" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="accordion-wn-wp">
                        <div class="accordion-hd">
                            <h1>FAQ</h1>
                            <p>Dibawah merupakan pertanyaan yang sering ditanyakan perihal dashboard CEO</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="accordion-stn sm-res-mg-t-30">
                                    <div class="panel-group" data-collapse-color="nk-blue" id="accordionRed"
                                        role="tablist" aria-multiselectable="true">

                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordionRed"
                                                        href="#accordionRed-one" aria-expanded="true">
                                                        Apa kegunaan dashboard CEO ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionRed-one" class="collapse in" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Disini peserta bisa melakukan pengisian <a href="<?php echo base_url('Home/KetuaCEO')?>">data ketua & anggota</a>, peserta juga bisa 
                                                    mendapatkan berita berita terbaru di laman Home dashboard. disini peserta juga akan mengakses 
                                                    test online melalui laman <a href = "<?php echo base_url('Home/KetuaCEO')?>">CBT (Test Online)</a></p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionRed" href="#accordionRed-two"
                                                        aria-expanded="false">
                                                         Mengapa setelah mengisi data dan mengupload pembayaran pendaftara belum tervalidasi ?
                                                    </a>
                                                </h4>
                                            </div>

                                            <div id="accordionRed-two" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Panitia melakukan validasi secara manual, sehingga dimohon peseta menunggu sampai panitia memvalidasi atau hubungi panitia</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-collapse notika-accrodion-cus">
                                            <div class="panel-heading" role="tab">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse"
                                                        data-parent="#accordionRed" href="#accordionRed-three"
                                                        aria-expanded="false">
                                                        Bisakah mengganti password dan bila lupa password apa yang kita lakukan ?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="accordionRed-three" class="collapse" role="tabpanel">
                                                <div class="panel-body">
                                                    <p>Penggantioan password bisa dilakukan di <a href="<?php echo base_url('Home/InformasiAkun')?>">disini</a> atau hubungi panitia</p>
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
        </div>
    </div>
    <!-- faq -->

    <!-- jadwal -->
    <div class="container" id="jadwal">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="normal-table-list mg-t-30">
                    <div class="basic-tb-hd">
                        <h1>Jadwal CEO</h1>
                        <p>Dibawah merupakan table jadwal seluruh kegiatan CEO</p>
                    </div>
                    <div class="bsc-tbl-st">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kegiatan</th>
                                    <th>Tanggal Pelaksanaan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  foreach($jadwal as $jd){ ?>
                                <tr>
                                    <td><?php echo $jd->Kegiatan ?></td>
                                    <td><?php echo $jd->Tanggal ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jadwal -->



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