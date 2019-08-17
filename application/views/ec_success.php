<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- Favicons -->
   <link rel="shortcut icon" href="<?php echo base_url('assets/img/Homepage/Logo/chemication.png')?>">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
    <title>registrasi sukses</title>

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
                                            Registrasi <b>Berhasil</b> <br>
                                            <small>Print / simpan screenshot laman ini sebagai bukti pendaftaran EC </small>
                                        </h3>
                                    </div>

                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#informais_akun" data-toggle="tab">ID Pendaftaran</a></li>
                                        </ul>

                                    </div>

                                    <!-- informasi akun -->
                                    <div class="tab-content">
                                        <div class="tab-pane" id="informais_akun">
                                        <br><br><br>
                                            <div class="row">
                                                <div class="col-sm-12 col-sm-offset">
                                                <div class="alert alert-success"><center><h4>ID Pendaftaran Energy Competition</h4>
                                                                                <h1><?php if(isset($id)){echo $id;}?></h1></center>
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
    window.onbeforeunload = function(){
    return 'Are you sure you want to leave?';
    };

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