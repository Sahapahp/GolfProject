
<!--      <div class="text-center">
        <h1>เข้าสู่ระบบ</h1>

          <form action="Member_login_process" method="POST" class="clearfix">
            <label>UserName :</label>
            <input type="text" name="username" id="name" placeholder="username"/><br /><br />
            <label>Password :</label>
            <input type="password" name="password" id="password" placeholder="******"/><br/><br />
            <input type="submit" class="btn btn-info  pull" value=" Login " name="submit"/><br />

<?php if ($this->session->flashdata('error')): ?>
                  <div>
                    <div class="alert alert-success">
              <strong>ล้มเหลว!</strong> ชื่อหรือผู้ใช้ไม่ถูกต้อง
                    </div> 
                  </div>
<?php endif; ?>
          </form>

      </div>-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login V15</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/Login/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Login/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title" style="background-image: url(<?php echo base_url(); ?>assets/Login/images/bg-01.jpg);">
                        <span class="login100-form-title-1">
                            เข้าสู่ระบบ
                        </span>
                    </div>

                    <form class="login100-form validate-form clearfix" action="Member_login_process" method="POST">
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100">ชื่อผู้ใช้</span>
                            <input class="input100" type="text" name="username" placeholder="Enter username">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                            <span class="label-input100">รหัสผ่าน</span>
                            <input class="input100" type="password" name="password" placeholder="Enter password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="flex-sb-m w-full p-b-30">

                        </div>

                        <div class="container-login100-form-btn">
                            <input type="submit" name="submit" value="เข้าสู่ระบบ" class="login100-form-btn">

                        </div>
                        <br><br><br>
                        <?php if ($this->session->flashdata('error')): ?>
                            <div>
                                <div class="alert alert-success">
                                    <strong>ล้มเหลว!</strong> ชื่อหรือผู้ใช้ไม่ถูกต้อง
                                </div> 
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Login/vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Login/vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>assets/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Login/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Login/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Login/vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Login/vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>assets/Login/js/main.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    </body>
</html>
