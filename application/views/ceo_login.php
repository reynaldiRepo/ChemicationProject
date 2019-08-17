<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- Favicons -->
   <link rel="shortcut icon" href="<?php echo base_url('assets/img/Homepage/Logo/chemication.png')?>">   
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> -->
    <title>CEO Login</title>

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
    <div class="image-container set-full-height" style="background-image: url('<?php echo base_url('assets/CEO/img/Homepage/register.jpg')?>')">
        <!--   Creative Tim Branding   -->
        <a href="<?php echo base_url('Home/ceo')?>">
            <div class="logo-container">
                <div class="brand">
                    Home
                </div>
            </div>
        </a>


        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="blue">
                            <form action="<?php echo base_url('Home/CeoLogin_submit')?>" method="POST">
                                <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                <div class="wizard-header">
                                    <h3>
                                    Chemication Engineering Olymiade<br>
                                        <small>Login untuk memasuki Dashbord CEO</small>
                                    </h3>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#informais_akun" data-toggle="tab">Login CEO</a></li>
                                    </ul>

                                </div>
                                
                                <!-- informasi akun -->
                                <div class="tab-content">
                                    <div class="tab-pane" id="informais_akun">
                                        <div class="row">
                                            <h4 class="info-text">Masuk Ke Akun Anda</h4>
                                            
                                            <div class="col-sm-10 col-sm-offset-1">
                                            <div class = "alert alert-success" id="alertMsg"><?php echo $succsesLogin_msg?></div>
                                            <div class = "alert alert-danger" id="alertError"><?php echo $email_msg?></div>
                                                <div class="form-group">
                                                    <label>Email <small>(required)</small></label>
                                                    <input name="email_ceo" id="email_ceo" type="email"
                                                        class="form-control" placeholder="mymail@Example.com"
                                                        value="<?php echo $email?>">
                                                </div>
                                            </div>

                                            <div class="col-sm-10 col-sm-offset-1">
                                                <div class="form-group">
                                                    <label>Password <small>(required)</small></label>
                                                    <input name="password_ceo" id="password_ceo" type="password"
                                                        class="form-control" placeholder="Password"
                                                        value="<?php echo $PASSWORD?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <br>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'
                                            name='finish' value='Masuk' />
                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm'
                                            name='registrasi' value='Registrasi'
                                            onclick="location.href='<?php echo base_url('Home/CeoRegist')?>';" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        <div class="footer">
            <div class="container">
                &copy; Copyright <strong>chemication</strong>. All Rights Reserved 2019
            </div>
        </div>

    </div>

</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/CEO/assets/js/jquery-2.2.4.min.js" type="text/javascript')?>"></script>
<script src="<?php echo base_url('assets/CEO/assets/js/bootstrap.min.js" type="text/javascript')?>"></script>
<script src="<?php echo base_url('assets/CEO/assets/js/jquery.bootstrap.wizard.js" type="text/javascript')?>"></script>
<script src="<?php echo base_url('assets/CEO/assets/js/UploadImagePreview.js" type="text/javascript')?>"></script>
<script src="<?php echo base_url('assets/CEO/assets/js/RegisterConfirm.js" type="text/javascript')?>"></script>


<!--  Plugin for the Wizard -->
<script src="<?php echo base_url('assets/CEO/assets/js/gsdk-bootstrap-wizard.js')?>"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="<?php echo base_url('assets/CEO/assets/js/jquery.validate.min.js')?>"></script>


</html>