
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>ระบบจัดการสนามกอล์ฟ    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
  </head>
  <body>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="page">
  <div class="container-fluid">
    <div class="login-page">
      <div class="text-center">
        <h1>เข้าสู่ระบบแอดมิน</h1>

          <form action="admin_login_process" method="POST" class="clearfix">
            <label>UserName :</label>
            <input type="text" name="username" id="name" placeholder="username" required/><br /><br />
            <label>Password :</label>
            <input type="password" name="password" id="password" placeholder="******" required /><br/><br />
            <input type="submit" class="btn btn-info  pull" value=" Login " name="submit"/><br />

          <?php if($this->session->flashdata('error')): ?>
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
</div>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="libs/js/functions.js"></script>
  </body>
</html>
