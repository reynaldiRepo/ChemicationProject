<?php 

if (isset($data_anggota1)) {
    foreach($data_anggota1 as $data){
        $nisn = $data->NISN;
        $nama = $data->Nama_anggota1;
        $kota = $data->Tempat_Lahir;
        $tgl = $data->tanggal_lahir;
        $jk = $data->Jenis_kelamin;
        $kls = $data->Kelas;
        $kontak = $data->KontakWaLine;
        $alamat = $data->Alamat;
        $foto = $data->Pasfoto;
        $scan = $data->KartuPelajar; 
    }
}
?>

 <!-- rekap -->
 <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="widget-tabs-int">
                    <div class="tab-hd">
                        <h2>Data Ketua & Anggota</h2>
                        <p>Lengkapi data ketua dan anggota dibawah.</p>
                        <br>
                        <div class="alert alert-warning" id="error_msg"><?php echo $error_msg;?></div>
                        <div class="alert alert-success" id="success_msg"><?php echo $success_msg;?></div>
                    </div>
                    <div class="widget-tabs-list">
                        <ul class="nav nav-tabs">
                            <li><a href="<?php echo base_url('Home/KetuaCEO') ?>">Ketua</a></li>
                            <li class="active"><a href="<?php echo base_url('Home/anggota1CEO') ?>">Anggota 1</a></li>
                            <li><a href="<?php echo base_url('Home/anggota2CEO') ?>">Anggota 2</a></li>
                        </ul>
                        <div class="tab-content tab-custom-st">

                            <div id="anggota1" class="tab-pane fade in active">
                                <?php echo form_open_multipart('Home/submit_data_anggota1CEO')?>
                                    <div class="tab-ctn">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-example">

                                                    <div class="cmp-tb-hd cmp-int-hd">
                                                        <h2>Data Anggota 1</h2>
                                                    </div>

                                                    <div class="form-example-int form-horizental">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">NISN</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="text"
                                                                            class="form-control input-sm"
                                                                            placeholder="NISN" name="nisn_anggota1_ceo"
                                                                            id="nisn_anggota1_ceo"
                                                                            value="<?php if (isset($nisn)) {echo $nisn;}?>"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Nama anggota1</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm"
                                                                            placeholder="Nama" name="nama_anggota1_ceo"
                                                                            id="nama_anggota1_ceo"
                                                                            value="<?php if (isset($nama)) {echo $nama;}?>"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Jenis Kelamin</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <div class="bootstrap-select fm-cmp-mg">
                                                                            <select class="selectpicker"
                                                                                name="jk_anggota1_ceo" id="jk_anggota1_ceo">
                                                                                <option <?php if (isset($jk)) {if ($jk == 'L') {echo "selected";}}?> value="L">Laki - Laki</option>
                                                                                <option <?php if (isset($jk)) {if ($jk == 'P') {echo "selected";}}?> value="P">Perempuan</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Kota Kelahiran</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm"
                                                                            placeholder="Kota" name="kota_anggota1_ceo"
                                                                            id="kota_anggota1_ceo" 
                                                                            value="<?php if (isset($kota)) {echo $kota;}?>"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Tanggal Lahir</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control"
                                                                            name="tgl_anggota1_ceo" id="tgl_anggota1_ceo"
                                                                            data-mask="99 / 99 / 9999"
                                                                            placeholder="dd / mm / yyyy"
                                                                            value="<?php if (isset($tgl)) {echo $tgl;}?>"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Kelas</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="number"
                                                                            class="form-control input-sm"
                                                                            placeholder="10/11/12   "
                                                                            name="kelas_anggota1_ceo" id="kelas_anggota1_ceo"
                                                                            value="<?php if (isset($kls)) {echo $kls;}?>"
                                                                            required max="12" min="10">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Alamat</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm"
                                                                            placeholder="Alamat" name="alamat_anggota1_ceo"
                                                                            value="<?php if (isset($alamat)) {echo $alamat;}?>"
                                                                            id="alamat_anggota1_ceo" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Kontak WA / Line </label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="text" class="form-control input-sm"
                                                                            placeholder="Kontak" name="kontak_anggota1_ceo"
                                                                            value="<?php if (isset($kontak)) {echo $kontak;}?>"
                                                                            id="kontak_anggota1_ceo" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Pas Foto (3 x 4)</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="file" class="form-control input-sm"
                                                                            placeholder="Foto 3 X 4"
                                                                            name="foto_anggota1_ceo" id="foto_anggota1_ceo"
                                                                            accept="image/*"
                                                                            onchange="size_validator_foto()"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-example-int form-horizental mg-t-15">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="hrzn-fm">Scan Kartu Pelajar</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                                                                    <div class="nk-int-st">
                                                                        <input type="file" class="form-control input-sm"
                                                                            placeholder="Scan" name="scan_anggota1_ceo"
                                                                            id="scan_anggota1_ceo" accept="image/*"
                                                                            onchange="size_validator_scan()"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="form-example-int mg-t-15">
                                                        <div class="row">
                                                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <button class="btn btn-success notika-btn-success"
                                                                    type="submit">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

    <!-- Input Mask JS
		============================================ -->
    <script src="<?php echo base_url('assets/CEO/Dashboard/js/jasny-bootstrap.min.js')?>"></script>
    <!-- bootstrap select JS
            ============================================ -->
    <script src="<?php echo base_url('assets/CEO/Dashboard/js/bootstrap-select/bootstrap-select.js')?>"></script>

    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

    <script>
        var uploadField1 = document.getElementById("foto_anggota1_ceo");
     
        function size_validator_foto(){
            if (uploadField1.files[0].size > 250000) {
                console.log(uploadField1.files[0].size);
                alert("Ukuran Foto Tidak Boleh Melebihi 250kb");
                uploadField1.value = "";
            }
        }

        var uploadField2 = document.getElementById("scan_anggota1_ceo");
        function size_validator_scan(){
            if (uploadField2.files[0].size > 250000) {
                alert("Ukuran Scan Tidak Boleh Melebihi 250kb");
                uploadField2.value = "";
            }
        };
    </script>

    <script>
        var warning = document.getElementById('error_msg');
        var success = document.getElementById('success_msg');

        if (warning.innerHTML == 'kosong') {
        warning.style.display='none';
        success.style.display='';
        }else{
        warning.style.display='';
        success.style.display='none';
        }
    </script>

</body>

</html>