<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EC - National Chemication 2019</title>
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
    <link href="<?php echo base_url('assets/EC/css/ec_style.1.css')?>" rel="stylesheet">
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="#intro"><span>EC</span></a></h1>
                <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a> -->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="<?php echo base_url('Home')?>">Home</a></li>
                    <li><a href="<?php echo base_url('Home/ec_regist')?>">Registrasi</a></li>
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
            <h1 class="mb-4 pb-0"><span>Energy </span>Competition</h1>
            <p class="mb-4 pb-0">Universitas Pembangunan Nasional Veteran Jawa Timur</p>
            <a href="<?php echo base_url('Home/ec_regist')?>" class="about-btn scrollto">Registrasi EC</a>
        </div>
    </section>
    <!-- about ceo -->
    <section id="about" style="background: url(<?php echo base_url('assets/img/Homepage/about.jpg')?>);
                             background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details">
                        <h2>Tentang EC</h2>
                        <p><b><i>Energy Competition</i> merupakan serangkaian acara Chemication yang diadakan oleh HIMPUNAN MAHASISWA TEKNIK KIMIA UPN "VETERAN" JAWA TIMUR</b>
                             dibidang kompetisi karya tulis ilmiah yang di tujukan untuk Mahasiswa/Mahasiswi S1/Diploma se-Indonesia yang bertujuan untuk meningkatkan 
                             kompetensi Mahasiswa dibidang penelitian terutama teknologi tepat guna, Membangun dan mengembangkan
                             inovasi mahasiswa yang dapat bermanfaat bagi masyarakat, Melatih pribadi yang mandiri dan bertanggung jawab untuk Indonesia di masa depan.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="details">
                        <h2>Guide Book</h2>
                        <p>download Guide Book Energy Competition <a href="<?php echo base_url('uploaded/GuideBook/GUIDE_BOOK_EC_2019.pdf')?>">disini</a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <main id="main">

<?php if (isset($post)){?>
     <!-- EC News -->
     <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Pemberitahuan</h2>
                </div>
                <?php foreach ($post as $p) {?>
                <div class="tab-content row justify-content-center">
                    <!-- Schdule CEO -->
                    <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="day-1">

                        <div class="row schedule-item">
                            <div class="col-md-12">
                                <h4><?php echo $p->Judul?></h4>
                                <br>
                                <p><?php echo $p->isi?></p>
                                <br>
                                <a href ="<?php echo $p->link;?>" target="_blank"><?php echo $p->link_judul; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
    </section>    
    <?php }?>
    
     <section id="faq" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <h2>Pamflet EC</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <img src="<?php echo base_url('assets/EC/img/pamflet.jpg')?>" style="width : 100%;">
                    </div>
                </div>

            </div>

        </section>


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
                                <a data-toggle="collapse" class="collapsed" href="#faq1">MEKANISME PENDAFTARAN<i class="fa fa-minus-circle"></i></a>
                                <div id="faq1" class="collapse" data-parent="#faq-list">
                                    <ul>
                                        <li> Setiap tim wajib mengisi formulir pendaftaran pada kolom Registrasi.</li>
                                        <li> Setelah pendaftaran, peserta akan mendapat ID yang akan digunakan untuk mengirimkan abstrak, konfirmasi abstrak, pengiriman proposal, dan konfirmasi proposal. </li>
                                        <li> Setiap tim mengirimkan berkas pendaftaran dan abstrak ke : <a href="mailto:chemication.upnvjatim@gmail.com">chemication.upnvjatim@gmail.com</a></li>
                                        <li> Pendaftaran dan pengiriman abstrak tidak dipungut biaya(GRATIS).</li>
                                        <li> Setiap tim yang telah mengirimkan berkas wajib melakukan konfirmasi ke nomor tersebut 0859-1819-89357 dengan format ID_Energy Competition_Judul abstrak.
                                            Contoh : EC0001A_ Energy Competition_ Teknologi zero water dischagre.</li>

                                    </ul>
                                    <br>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq2" class="collapsed">KETENTUAN KOMPETISI<i class="fa fa-minus-circle"></i></a>
                                <div id="faq2" class="collapse" data-parent="#faq-list">
                                    <ul>
                                        <li>Kompetisi dibagi menjadi 3 tahap yang meliputi tahap Seleksi Abstrak, Seleksi Proposal dan Grand Final.<br>
                                        Pada tahap Seleksi Abstrak, setiap tim mengirimkan abstrak kemudian dilakukan penjurian untuk menentukan peserta yang lolos ke tahap selanjutnya.<br>
                                        Pada tahap Seleksi Proposal, peserta yang dinyatakan lolos seleksi abstrak mengirimkan proposal lengkap beserta berkas yang ada. Kemudian, dilakukan penjurian kedua untuk menentukan 10 karya terbaik yang akan diundang ke Universitas Pembangunan Nasional “Veteran” Jawa Timur untuk memperebutkan juara 1, 2, 3, dan favorit demo karya pada grand final.<br>
                                        Pada tahap Grand Final, 10 karya terbaik mempresentasikan proposal dan demo karya. <br></li>
                                        <li>Tim yang lolos pada tahap seleksi proposal wajib mengenakan almamater dari institusi pendidikan masing-masing pada saat acara Energy Competition berlangsung.</li>
                                        <li>Segala urusan keuangan menyangkut pembuatan karya tulis dan pembuatan demo karya BUKAN tanggung jawab panitia.</li>
                                        <li>Segala tindak kecurangan yang dilakukan oleh peserta akan dikenakan pengurangan nilai atau diskualifikasi.</li>
                                        <li>Keputusan juri bersifat mutlak dan tidak dapat diganggu gugat.</li>
                                    </ul>
                                    <br>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq3" class="collapsed">KETENTUAN PESERTA<i class="fa fa-minus-circle"></i></a>
                                <div id="faq3" class="collapse" data-parent="#faq-list">
                                    <ul> 
                                       <li>Peserta merupakan mahasiswa aktif sarjana atau diploma pada PTN/PTS/Politeknik/Akademi/Sekolah Tinggi di Indonesia (dibuktikan dengan scan kartu tanda mahasiswa).
                                        Bagi mahasiswa yang tidak memiliki KTM dapat menggunakan surat keterangan yang menerangkan bahwa peserta merupakan mahasiswa aktif 
                                        dari institusi pendidikan tersebut.</li>
                                       <li>Setiap Tim terdiri dari 2-3 orang, dapat berasal dari program studi yang berbeda tapi dalam satu institusi pendidikan yang sama.</li>
                                       <li>Tiap peserta boleh tergabung dalam 2 tim dengan judul yang berbeda.</li>
                                       <li>Setiap tim didampingi oleh dosen pembimbing dari institusi pendidikan yang sama.</li>
                                       <li>Setiap peserta hanya diperbolehkan menjadi ketua pada satu tim.</li>
                                       <li>Peserta dilarang mengikutsertakan karyanya dikompetisi lain selama Energy Competition berlangsung.</li>

                                    </ul>
                                    <br>
                                </div>
                            </li>

                            <li>
                                <a data-toggle="collapse" href="#faq4" class="collapsed">HADIAH DAN PENGHARGAAN<i class="fa fa-minus-circle"></i></a>
                                <div id="faq4" class="collapse" data-parent="#faq-list">
                                    <ul> 
                                       <li>Juara I<br> Rp 3.000.000,00 + <b class="fa fa-trophy"></b> Thropy  + <b class="fa fa-certificate"></b> SERTIFIKAT</li>
                                       <li>Juara II<br> Rp 2.000.000,00 + <b class="fa fa-trophy"></b> Thropy  + <b class="fa fa-certificate"></b> SERTIFIKAT</li>
                                       <li>Juara III<br> Rp 1.000.000,00 + <b class="fa fa-trophy"></b> Thropy  + <b class="fa fa-certificate"></b> SERTIFIKAT</li>
                                       <li>Demo Karya Terbaik<br> Rp. 500.000,00 + <b class="fa fa-certificate"></b> SERTIFIKAT</li>                                    
                                    </ul>
                                    <br>
                                </div>
                            </li>
                            
                            <li>
                                <a data-toggle="collapse" href="#faq5" class="collapsed">CONTACT PERSON<i class="fa fa-minus-circle"></i></a>
                                <div id="faq5" class="collapse" data-parent="#faq-list">
                                    <p> 
                                       <b>Neno Nidia Lifian</b><br>
                                        - id Line &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : nidia_lifiana<br>
                                        - Whatsapp&nbsp&nbsp : 0895-6233-65266<br>
                                        - Telp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 0895-6233-65266<br>
                                        - Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: nidialifian999@gmail.com<br>
                                        <br>
                                        <b>Pramesti Putri M</b><br>
                                        - id Line &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : Pramestirani<br>
                                        - Whatsapp&nbsp&nbsp : 0838-6706-0096<br>
                                        - Telp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 0838-6706-0096<br>
                                        - Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: -<br>
                                        <br>
                                    <br>
                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

        </section>

         <!--jadwal EC -->
         <section id="schedule" class="section-with-bg">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h2>Timeline EC</h2>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">EC</a>
                </ul>

                <h3 class="sub-heading">Dibawah merupakan jadwal dari Hari Registrasi sampai Penutupan Lomba</h3>

                <div class="tab-content row justify-content-center">

                    
                    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>21 Juni - 21 Juli 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Publish Online</h4>
                                <p>Pendaftaran dan Pengiriman Abstrak</p>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>29 Juli - 3 Agustus 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Seleksi Abstrak</h4>
                                <p>Proses seleksi abstrak</p>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>4 Agustus 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Pengumunan</h4>
                                <p>Pengumuman Lolos Abstrak</p>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>5 Agustus - 5 September</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Pengumpulan Proposal dan bukti pembayaran</h4>
                                <p>Peserta mengumpulkan proposal dan bukti pendaftaran</p>
                            </div>
                        </div>
                        
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>12 September - 23 September 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Seleksi Proposal</h4>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>24 September 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Pengumuman 10 Besar</h4>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>25 September - 17 Oktober 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Pembuatan Demo Karya</h4>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>18 Oktober 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Technical Meeting</h4>
                            </div>
                        </div>
                        
                        <div class="row schedule-item">
                            <div class="col-md-3">
                                <date>21 Oktober 2019</date>
                            </div>
                            <div class="col-md-9">
                                <h4>Grand Final</h4>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section> 
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