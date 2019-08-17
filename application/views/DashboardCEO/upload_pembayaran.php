<?php 

if (isset($detail)) {
    foreach($detail as $data){
        $src = $data->bukti_pembayaran; 
        $status = $data->Status_pembayaran;
    }
    if ($status == '01') {
        $error_msg = 'Bukti Pembayaran belum terupload, silahkan upload dibawah';
        $success_msg = 'kosong';
    }elseif ($status == '02') {
        $success_msg = 'Bukti Pembayaran telah terupload silahkan tunggu sampai pembayaran divalidasi ';
        $error_msg = 'kosong';
    }else{
        $success_msg = 'Pembayaran sudah divalidasi';
        $error_msg = 'kosong';
    }
}
?>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="alert alert-danger" id="warning_msg" ><?php echo $error_msg?></div>
                <div class="alert alert-success" id="success_msg"><?php echo $success_msg?></div>
            </div>
        </div>
    </div>


    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-11">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Upload Bukti Pembayaran Disini</h2>
                                        <p>Selamat datang di Dashboard CEO, disini peserta akan mendapat keseluruhan
                                            Setelah mengisi semua informasi data diri ketua & anggota diharapkam peserta
                                            segera
                                            melakukan konfirmasi pendaftaran dengan mengupload bukti pembayaran
                                        </p>
                                        <br>
                                        <div class="form-group">
                                        <?php echo form_open_multipart('Home/submit_pembayaranCEO')?>
                                                <label for="bukti_pembayaran_ceo">Bukti Pembayaran</label>
                                                <input type="file" class="form-control input-sm"
                                                    name="bukti_pembayaran_ceo" id="bukti_pembayaran_ceo"
                                                    onchange="validator_foto()" 
                                                    accept="image/*"
                                                    required>
                                                <br>
                                                <button type="submit" class="btn btn-success notika-btn-success">Upload Bukti Pembayaran</button>
                                            </form>
                                        </div>
                                        <br>
                                        <div class="alert alert-warning">
                                            <p>
                                                <strong>Admin akan segera melakukan Validasi setelah
                                                    peserta mengupload bukti pembayaran</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-11">
                                <div class="breadcomb-wp">
                                
                                    <div class="breadcomb-ctn">
                                        <h2>Bukti Pembayaran *</h2>
                                        <div class="image_container" style="width: 90%; margin-left: auto;
                                            margin-right: auto; 
                                            background-color: rgba(117, 153, 219, 0.284);
                                            border-radius: 10px;">

                                            <img src="<?php 
                                                    if ($status != '01') {echo base_url('uploaded/CEO/Pembayaran/'.$src);}
                                                    else{echo base_url('assets/CEO/Dashboard/img/image_upload.png');} ?>"
                                            id="image_preview"
                                            style="width: 95%; max-width: 300px; padding: 1em; margin-left: auto; margin-right: auto;">
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

    <script>
     var uploadField1 = document.getElementById("bukti_pembayaran_ceo");
     
     function validator_foto(){
         if (uploadField1.files[0].size > 250000) {
             console.log(uploadField1.files[0].size);
             alert("Ukuran File Tidak Boleh Melebihi 500kb");
             uploadField1.value = "";
         }else{
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("bukti_pembayaran_ceo").files[0]);
            oFReader.onload = function(oFREvent) {
            document.getElementById("image_preview").src = oFREvent.target.result;
            }
        }
    }
    </script>
</body>

</html>