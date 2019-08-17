<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HSFC - National Chemication 2019</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- <meta content="" name="keywords">
  <meta content="" name="description"> -->

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/Homepage/Logo/chemication.png')?>">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/venobox/venobox.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url('assets/HSFC/css/styleHSFCHOME.css')?>" rel="stylesheet">
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1><a href="#intro"><span>HSFC</span></a></h1>
                <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a> -->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?php echo base_url('Home')?>">Home</a></li>
                    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScmBdmAXI9yeH6xTma08-HT32jALeDrUP9eYz7f_CKfJOWVNQ/viewform?usp=sf_link">Registrasi</a></li>
                    <li><a href="#schedule">Timeline</a></li>
                    <li><a href="#faq">Informasi Lomba</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section 
  ============================-->
    <section id="intro">
        <div class="intro-container wow fadeIn">
            <h1 class="mb-4 pb-0">High School<br><span>Futsal </span>Competition</h1>
            <p class="mb-4 pb-0">Universitas Pembangunan Nasional Veteran Jawa Timur</p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScmBdmAXI9yeH6xTma08-HT32jALeDrUP9eYz7f_CKfJOWVNQ/viewform?usp=sf_link" class="about-btn scrollto">Registrasi HSFC</a>
        </div>
    </section>
    <!-- about ceo -->
    <section id="about" style="background: url(<?php echo base_url('assets/img/Homepage/about.jpg')?>);
                             background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="details">
                        <h2>Tentang HSFC</h2>
                        <p><b>"Let’s Fairplay Together To Be The Real Champions"</b>
                            <br>HSFC adalah sub lomba dari event chemication, HSFC akan mempertandingkan tim - tim futsal dari level sekolah menengah atas atau sederajat<br>
                            pendaftaran online bisa dilakukan <a href="https://docs.google.com/forms/d/e/1FAIpQLScmBdmAXI9yeH6xTma08-HT32jALeDrUP9eYz7f_CKfJOWVNQ/viewform?usp=sf_link">disini</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="details">
                        <h2>Formulir HSFC</h2>
                        <p>Formulir HSFC Bisa didownload <a href="<?php echo base_url('uploaded/GuideBook/FORMULIR_HSFC_2019.docx')?>">disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="main">


     <!-- Pertandingan Hari Ini -->
     <?php if (isset($news)) { ?>
     <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Jadwal Pertandingan</h2>
                </div>
                <div class="tab-content row justify-content-center">

                    <!-- Schdule CEO -->
                    <div role="tabpanel" class="col-lg-10 tab-pane fade show active" id="day-1">

                        <?php foreach($news as $post) {?> 
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date><?php echo $post->tanggal; ?></date>
                            </div>
                            <div class="col-md-9">
                                <h4><?php echo $post->tim_a; ?> Vs <?php echo $post->tim_b; ?></h4>
                                <p><?php echo $post->pukul; ?></p>
                            </div>
                        </div>
                        <?php }?>

                    </div>
                </div>
            </div>
    </section>
     <?php }?>    


        <!-- Faq -->

        <section id="faq" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Informasi Lomba</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <ul id="faq-list">

                            <li>
                                <a data-toggle="collapse" class="collapsed" href="#faq1">Kapan dan dimana waktu dan tempat kegiatan ?<i class="fa fa-minus-circle"></i></a>
                                <div id="faq1" class="collapse" data-parent="#faq-list">
                                    <ul>
                                        <li> Tempat Kegiatan "Gool Futsal Ruko Mangga Dua JL. Jagir Wonokromo No.100" </li>
                                        <li> Waktu Kegiatan Jum'at – Minggu ( 18- 20 Oktober 2019 ) </li>
                                        <li> Technical Meeting / TM 12 Oktober 2019 ( Ruang Seminar Ir. Soekamto ) </li>
                                    </ul>
                                    <br>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq2" class="collapsed">Persyaratan<i class="fa fa-minus-circle"></i></a>
                                <div id="faq2" class="collapse" data-parent="#faq-list">
                                    <ul>
                                        <li>Pemain yang didaftarkan dinyatakan masih dalam masa sekolah (SMA)</li>
                                        <li>FC kartu pelajar setiap pemain ( jika tidak ada melampirkan surat keterangan dari sekolah )</li>
                                        <li>2 lembar foto 3x4 setiap pemain</li>
                                        <li>Surat rekomendasi sekolah</li>
                                        <li>1 lembar FC raport semester terakhir yang sudah di legalisir</li>
                                        <li>Peserta umum. Terdiri dari 12 pemain dan 2 official.</li>
                                    </ul>
                                    <br>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq3" class="collapsed">Mekanisme Pendaftaran<i class="fa fa-minus-circle"></i></a>
                                <div id="faq3" class="collapse" data-parent="#faq-list">
                                    <ul> 
                                       <li>Pendaftaran Bisa dilakukan secara offline langsung menuju UPNV jatim <br>Pendaftaran online bisa dilakukan : <a href="https://docs.google.com/forms/d/e/1FAIpQLScmBdmAXI9yeH6xTma08-HT32jALeDrUP9eYz7f_CKfJOWVNQ/viewform?usp=sf_link">disini</a> Atau
                                       download formulir : <a href="<?php echo base_url('uploaded/GuideBook/FORMULIR_HSFC_2019.docx')?>">disini</a></li>
                                       <li>Biaya Registrasi Sebesar Rp.350.000 bisa dibayarkan saat pengambilan formulir atau transfer bank</li>
                                       <li>Isikan formulir offline/online beserta peryaratan yang dibutuhkan sebelum pendaftaran ditutup</li>
                                       <li>Pembayaran yang sudah dilakukan namun peserta tidak hadir saat lomba akan dianggap gugur</li>
                                    </ul>
                                    <br>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq4" class="collapsed">Informasi Tambahan<i class="fa fa-minus-circle"></i></a>
                                <div id="faq4" class="collapse" data-parent="#faq-list">
                                    <ul>
                                        <li>Kelengkapan kurang, maka yang bersangkutan tidak bisa disahkan sebagai pemain/official oleh panitia</li>
                                        <li>Menyerahkan uang jaminan kartu IDR Rp. 50.000 pada saat pengambilan daftar susunan pemain (DSP) - saat lomba berlangsung</li>
                                        <li>Jika (kuota) 32 tim terpenuhi, maka kompetisi dapat digelar sesuai jadwal yang telah ditetapkan</li>
                                    </ul>
                                    <br>
                                </div>
                            </li>
                            
                            <li>
                                <a data-toggle="collapse" href="#faq5" class="collapsed">Contact Person<i class="fa fa-minus-circle"></i></a>
                                <div id="faq5" class="collapse" data-parent="#faq-list">
                                        <p>Contact Person HSFC :<br>
                                        1.	Thoriq ( id line : Tnaufaip / WA : 081281845752 )<br>
                                        2.	Esti ( id line : estipangestu_ / WA : 082228106484 )<br>
                                        Email : chemication.upnvjatim@gmail.com</p>
                                    <br>
                                </div>
                            </li>
                            
                            

                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <!-- jadwal ceo -->
        <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Timeline Hsfc</h2>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">HSFC</a>
                </ul>

                <h3 class="sub-heading">Dibawah merupakan jadwal dari Hari Registrasi sampai Penutupan Lomba</h3>

                <div class="tab-content row justify-content-center">

                    <!-- Schdule CEO -->
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <date>Sabtu/ 21 Juni 2019</date>
                            </div>
                            <div class="col-md-10">
                                <h4>Publish Online</h4>
                                <p>Publish online dan pembukaan pendaftaran</p>
                            </div>
                        </div>


                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <date>Selasa/ 9 Oktober 2019</date>
                            </div>
                            <div class="col-md-10">
                                <h4>Finalisasi Peserta</h4>
                                <p>Finalisasi pendaftaran peserta</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <date>Sabtu/ 12 Oktober 2019</date>
                            </div>
                            <div class="col-md-10">
                                <h4>Technical Meeting</h4>
                                <p>Di Ruang Seminar Ir. Soekamto UPN “Veteran” Jawa Timur</p>
                            </div>
                        </div>

                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <date>Jum'at/ 18 Oktober 2019</date>
                            </div>
                            <div class="col-md-10">
                                <h4>Opening dan pelaksanaan pertandingan (babak penyisihan)</h4>
                                <p>Tempat Kegiatan "Gool Futsal Ruko Mangga Dua JL. Jagir Wonokromo No.100"</p>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <date>Sabtu/ 19 Oktober 2019</date>
                            </div>
                            <div class="col-md-10">
                                <h4>Pertandingan babak selanjutnya hingga 8 besar)</h4>
                                <p>Tempat Kegiatan "Gool Futsal Ruko Mangga Dua JL. Jagir Wonokromo No.100"</p>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-2">
                                <date>Minggu/ 20 Oktober 2019</date>
                            </div>
                            <div class="col-md-10">
                                <h4>Pertandingan babak semi final, perebutan juara 3, final dan penutupan HSFC 2019</h4>
                                <p>Tempat Kegiatan "Gool Futsal Ruko Mangga Dua JL. Jagir Wonokromo No.100"</p>
                            </div>
                        </div>



                    </div>
                    <!-- End CEO -->




                    <!--==========================
      Sponsors Section
    ============================-->
                    <!-- <section id="supporters" class="section-with-bg wow fadeInUp">

                        <div class="container">
                            <div class="section-header">
                                <h2>Sponsor</h2>
                            </div>

                            <div class="row no-gutters supporters-wrap clearfix">

                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <div class="supporter-logo">
                                        <img src="<?php echo base_url('assets/img/supporters/Sponsor.jpg')?>"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <div class="supporter-logo">
                                        <img src="<?php echo base_url('assets/img/supporters/Sponsor.jpg')?>"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <div class="supporter-logo">
                                        <img src="<?php echo base_url('assets/img/supporters/Sponsor.jpg')?>"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6">
                                    <div class="supporter-logo">
                                        <img src="<?php echo base_url('assets/img/supporters/Sponsor.jpg')?>"
                                            class="img-fluid" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>

                    </section> -->


    </main>


 <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h5 style="color: #fff">NATIONAL <span style="color: #f82249">CHEMICATION</span></h5>
            <p>Chemication adalah serangkaian acara tahunan yang diadakan oleh HIMPUNAN MAHASISWA TEKNIK KIMIA UPN 
            "VETERAN" JAWA TIMUR yang terdiri dari 3 sub event diantaranya CEO, EC, HSFC</p>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href=<?php echo base_url('Home/')?>>Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo base_url('Home/')?>">Tentang Kami</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo base_url('Home/ceo')?>">CEO</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo base_url('Home/ec')?>">EC</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo base_url('Home/hsfc')?>">HSFC</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Alamat</h4>
            <p>Jalan Raya Rungkut Madya, Surabaya, Jawa Timur<br></p>
            <h4>Hubungi Kami</h4>
              <i class="fa fa-phone"> &nbsp&nbsp+62 82140203080</i> <br>
              <i class="fa fa-phone"> &nbsp&nbsp+62 85230141890</i> <br>
              <i class="fa fa-envelope"> &nbsp&nbspchemication.upnvjatim@gmail.com</i> <br><br>
            
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Presented By</h4>
            <div class="presented by" style="display: inline-block">
              <img src="<?php echo base_url('assets/img/Homepage/Logo/Upn.png')?>" alt="CEO" class="img-fluid" style="width: 70px; padding: 0.5em;">
              <img src="<?php echo base_url('assets/img/Homepage/Logo/logotekkim-01.png')?>" alt="CEO" class="img-fluid" style="width: 70px; padding: 0.5em;">
              <img src="<?php echo base_url('assets/img/Homepage/Logo/HIMATEKK.png')?>" alt="CEO" class="img-fluid" style="width: 70px; padding: 0.5em;">
              <br><br>
            </div>
            <h4>Social Media</h4>
              <i class="fa fa-instagram">&nbsp&nbsp@chemication </i> <br>
              <i class="fa fa-facebook"> &nbsp&nbsp@chemication</i> <br>
              <i class="fa fa-twitter">&nbsp&nbsp@chemication</i> <br>
          </div>

        </div>

      </div>
    </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>chemication</strong>. All Rights Reserved 2019
      </div>
    </div>
  </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/superfish/hoverIntent.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/superfish/superfish.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/venobox/venobox.min.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>

    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url('assets/contactform/contactform.js')?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url('assets/js/main.js"')?>"></script>
</body>

</html>