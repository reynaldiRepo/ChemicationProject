<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- Favicons -->
   <link rel="shortcut icon" href="<?php echo base_url('assets/img/Homepage/Logo/chemication.png')?>">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
    <title>EC Registrasi</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/CEO/assets/css/bootstrap.min.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/CEO/assets/css/gsdk-bootstrap-wizard.css')?>" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url('assets/CEO/assets/css/demo.css')?>" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height"
        style="background-image: url('<?php echo base_url('assets/EC/img/EC_BG.png')?>');background-size : cover ">
        <!--   Creative Tim Branding   -->
        <a href="<?php echo base_url('Home/ec')?>">
            <div class="logo-container">
                <div class="brand" style="color : black">
                <br>
                    Home
                </div>
            </div>
        </a>


        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">

                        <!--      Wizard container        -->
                        <div class="wizard-container">

                            <div class="card wizard-card" data-color="green">
                            <?php echo form_open_multipart('Home/submit_ec_regist')?>
                                    <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                    <div class="wizard-header">
                                        <h3>
                                            Registrasi <b>EC</b> <br>
                                            <small>Isi Informasi dibawah untuk melengkapi berkas pendaftaran</small>
                                        </h3>
                                    </div>

                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#informais_akun" data-toggle="tab">Isikan Data Tim</a></li>


                                        </ul>

                                    </div>

                                    <!-- informasi akun -->
                                    <div class="tab-content">
                                        <div class="tab-pane" id="informais_akun">
                                        <div class="alert alert-warning" id="alertSize"><?php if(isset($warning)){echo $warning;}?></div>

                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <h4 class="info-text">Informasi Institusi</h4>
                                                    <div class="form-group">
                                                        <label>Nama Institusi <small> (required)</small></label>
                                                        <input required name="nama_institusi" id="nama_institusi" type="text"
                                                            class="form-control" placeholder="Nama institusi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Telepon Institusi <small> (required)</small></label>
                                                        <input required name="telp_institusi" id="telp_institusi" type="text"
                                                            class="form-control" placeholder="081xxxxxxx">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email Institusi <small> (required)</small></label>
                                                        <input required name="email_institusi" id="email_institusi" type="email"
                                                            class="form-control" placeholder="example@mail.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Institusi  <small> (required)</small></label>
                                                        <input required name="alamat_institusi" id="alamat_institusi" type="text"
                                                            class="form-control" placeholder="alamat institusi">
                                                    </div>
                                                </div>

                                                <div class="col-sm-5 col-sm-offset">
                                                    <h4 class="info-text">Informasi Dosen Pembimbing</h4>
                                                    <div class="form-group">
                                                        <label>NIP Dosen <small> (required)</small></label>
                                                        <input required name="nip_dosen" id="nip_dosen" type="text"
                                                            class="form-control" placeholder="NIP Dosen">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Dosen <small> (required)</small></label>
                                                        <input required name="nama_dosen" id="nama_dosen" type="text"
                                                            class="form-control" placeholder="Nama Dosen">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak WA / Line Dosen <small> (required)</small></label>
                                                        <input required name="kontak_dosen" id="kontak_dosen" type="text"
                                                            class="form-control" placeholder="Kontak WA / Line">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email Dosen <small> (required)</small></label>
                                                        <input required name="email_dosen" id="email_dosen" type="email"
                                                            class="form-control" placeholder="example@mail.com">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    <h4 class="info-text">Ketua</h4>
                                                    <div class="form-group">
                                                        <label>Nama Ketua <small> (required)</small></label>
                                                        <input required name="nama_ketua" id="nama_ketua" type="text"
                                                            class="form-control" placeholder="Nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIM Ketua <small> (required)</small></label>
                                                        <input required name="nim_ketua" id="nim_ketua" type="text"
                                                            class="form-control" placeholder="Nim">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jurusan Ketua <small> (required)</small></label>
                                                        <input required name="jurusan_ketua" id="jurusan_ketua" type="text"
                                                            class="form-control" placeholder="Jurusan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pendidikan <small> (required)</small></label>
                                                        <select class="form-control" name="pendidikan_ketua" id="pendidikan_ketua">
                                                            <option value="Sarjana">Sarjana</option>
                                                            <option value="Diploma">Diploma</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak WA / Line Ketua <small> (required)</small></label>
                                                        <input required name="kontak_ketua" id="kontak_ketua" type="text"
                                                            class="form-control" placeholder="Kontak WA / Line">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email <small> (required)</small></label>
                                                        <input required name="email_ketua" id="email_ketua" type="email"
                                                            class="form-control" placeholder="Email Ketua">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pas Foto (3 X 4) Ketua <small> (required)</small></label>
                                                        <input required name="foto_ketua" id="foto_ketua" type="file"
                                                            class="form-control" accept="image/*" onchange="size_validator_foto()">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Scan KTM / SK Ketua <small> (required)</small></label>
                                                        <input required name="scan_ketua" id="scan_ketua" type="file"
                                                            class="form-control" accept="image/*" onchange="size_validator_foto()">
                                                    </div>
                                                </div>

                                                <div class="col-sm-5 col-sm-offset">
                                                    <h4 class="info-text">Anggota 1</h4>
                                                    <div class="form-group">
                                                        <label>Nama Anggota 1 <small> (required)</small></label>
                                                        <input required name="nama_anggota1" id="nama_anggota1" type="text"
                                                            class="form-control" placeholder="Nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIM Anggota 1 <small> (required)</small></label>
                                                        <input required name="nim_anggota1" id="nim_anggota1" type="text"
                                                            class="form-control" placeholder="Nim">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jurusan Anggota 1 <small> (required)</small></label>
                                                        <input required name="jurusan_anggota1" id="jurusan_anggota1" type="text"
                                                            class="form-control" placeholder="Jurusan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pendidikan <small> (required)</small></label>
                                                        <select class="form-control" name="pendidikan_anggota1" id="pendidikan_anggota1">
                                                            <option value="Sarjana">Sarjana</option>
                                                            <option value="Diploma">Diploma</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak WA / Line anggota1 <small> (required)</small></label>
                                                        <input required name="kontak_anggota1" id="kontak_anggota1" type="text"
                                                            class="form-control" placeholder="Kontak WA / Line">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email <small> (required)</small></label>
                                                        <input required name="email_anggota1" id="email_anggota1" type="email"
                                                            class="form-control" placeholder="Email anggota1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pas Foto (3 X 4) anggota1 <small> (required)</small></label>
                                                        <input required name="foto_anggota1" id="foto_anggota1" type="file"
                                                            class="form-control" accept="image/*" onchange="size_validator_foto()">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Scan KTM / SK anggota1 <small> (required)</small></label>
                                                        <input required name="scan_anggota1" id="scan_anggota1" type="file"
                                                            class="form-control" accept="image/*" onchange="size_validator_foto()">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5 col-sm-offset-1">
                                                    
                                                    <h4 class="info-text">Anggota 2 (Optional)</h4>
                                                    <div class="form-group">
                                                        <label>Centang bila ingin menambahkan anggota 2</label>
                                                        <input type="checkbox" name="cek_ac2" id="cek_ac2" value="true" style=" width : 40px; 
                                                                                                                        padding : 0.5em;
                                                                                                                        display : inline ;
                                                                                                                        -ms-transform: scale(2); /* IE */
                                                                                                                        -moz-transform: scale(2); /* FF */
                                                                                                                        -webkit-transform: scale(2); /* Safari and Chrome */
                                                                                                                        -o-transform: scale(2);"
                                                                                                                        onchange="EnableAC2()">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Anggota 2 <small> (required)</small></label>
                                                        <input disabled name="nama_anggota2" id="nama_anggota2" type="text"
                                                            class="form-control anggota 2" placeholder="Nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIM Anggota 2 <small> (required)</small></label>
                                                        <input disabled name="nim_anggota2" id="nim_anggota2" type="text"
                                                            class="form-control anggota 2" placeholder="Nim">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jurusan Anggota 2 <small> (required)</small></label>
                                                        <input disabled name="jurusan_anggota2" id="jurusan_anggota2" type="text"
                                                            class="form-control anggota 2" placeholder="Jurusan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pendidikan <small> (required)</small></label>
                                                        <select disabled class="form-control anggota 2" name="pendidikan_anggota2" id="pendidikan_anggota2">
                                                            <option value="Sarjana">Sarjana</option>
                                                            <option value="Diploma">Diploma</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak WA / Line anggota2 <small> (required)</small></label>
                                                        <input disabled name="kontak_anggota2" id="kontak_anggota2" type="text"
                                                            class="form-control anggota 2" placeholder="Kontak WA / Line">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email <small> (required)</small></label>
                                                        <input disabled name="email_anggota2" id="email_anggota2" type="email"
                                                            class="form-control anggota 2" placeholder="Email anggota2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Pas Foto (3 X 4) anggota2 <small> (required)</small></label>
                                                        <input disabled name="foto_anggota2" id="foto_anggota2" type="file"
                                                            class="form-control anggota 2" accept="image/*" onchange="size_validator_foto()">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Scan KTM / SK anggota2 <small> (required)</small></label>
                                                        <input disabled name="scan_anggota2" id="scan_anggota2" type="file"
                                                            class="form-control anggota 2" accept="image/*" onchange="size_validator_foto()">
                                                    </div>
                                                </div>

                                                <div class="col-sm-5 col-sm-offset">
                                                    <h4 class="info-text">Abstraksi</h4>
                                                    <div class="form-group">
                                                        <label>Judul Abstraksi  <small> (required)</small></label>
                                                        <input name="judul_abstraksi" id="judul_abstraksi" type="text"
                                                            class="form-control" placeholder="Judul abstraksi" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Subtema <small> (required)</small></label>
                                                        <select class="form-control" name="subtema" id="subtema">
                                                            <option value="A">A. Energi</option>
                                                            <option value="B">B. Material</option>
                                                            <option value="C">C. Kelautan</option>
                                                            <option value="D">D. Lingkungan</option>

                                                        </select>
                                                    </div>
                                                    <div class = "alert alert-warning">
                                                        Semua data yang diinputkan tidak bisa diubah, dimohon untuk mengecek kembali benar tidaknya data<br>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type='submit'
                                                            class='btn btn-finish btn-fill btn-success btn-wd btn-sm'
                                                        name='finish' value='Submit' />
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- wizard container -->
                    </div>
                </div><!-- end row -->
                <div class="footer">
                    <div class="container">
                        &copy; Copyright <strong>chemication</strong>. All Rights Reserved 2019
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    function EnableAC2() {

    var elements = document.getElementsByClassName("form-control anggota 2");
    var el = document.getElementById("cek_ac2");

    for (var i = 0; i < elements.length; i++) {
    if (!el.checked) {
        elements[i].disabled = true;
        }else{
            elements[i].disabled = false;
            }
        }
    }

    function size_validator_foto(e){
            var e = event.target;
            if (e.files[0].size > 250000) {
                console.log(e.files[0].size);
                alert("Ukuran File Tidak Boleh Melebihi 250kb");
                e.value = "";
            }
        }

    var alertDiv = document.getElementById('alertSize');
    if (alertDiv.innerHTML == '') {
        alertDiv.style.display = 'none';
    } else {
        alertDiv.style.display = '';
    }
</script>

<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/CEO/assets/js/jquery-2.2.4.min.js" type="text/javascript')?>"></script>
<script src="<?php echo base_url('assets/CEO/assets/js/bootstrap.min.js" type="text/javascript')?>"></script>
<script src="<?php echo base_url('assets/CEO/assets/js/jquery.bootstrap.wizard.js" type="text/javascript')?>"></script>
<script src="<?php echo base_url('assets/CEO/assets/js/UploadImagePreview.js" type="text/javascript')?>"></script>

<!--  Plugin for the Wizard -->
<script src="<?php echo base_url('assets/CEO/assets/js/gsdk-bootstrap-wizard.js')?>"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="<?php echo base_url('assets/CEO/assets/js/jquery.validate.min.js')?>"></script>


</html>