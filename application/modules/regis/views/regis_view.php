<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ระบบจัดการสนามกอล์ฟ    </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/main.css" />
</head>
<body>
  <header id="header">
    <div class="logo pull-left">ระบบจัดการสนามกอล์ฟ</div>
    <div class="header-content">
      <div class="header-date pull-left">
        <strong></strong>
      </div>
      
 </header>
 
<!-- sideMenU -->
 <div class="sidebar">
  <ul>
    <li>
      <a href="admin.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>หน้าแรก</span>
      </a>
    </li>
  
 </ul>

 
</div>

<div class="page">
  <!-- /MAIN body --> 
  <section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 

  <?php echo form_open('Regis/validateRegis'); ?>
  <form>
  <table>
    <tr>
      <td>UserName : </td>
      <td><input type="text" name="username" required="" maxlength="20" /></td>  
    </tr>
    <tr>
      <td>PassWord : </td>
      <td><input type="password" name="password" required="" maxlength="20" /></td>
    </tr>
    <td>ชื่อ : </td>
    <td><input type="text" name="FName" required="" maxlength="50" /></td>  
  </tr>
  <tr>
    <td>นามสกุล : </td>
    <td><input type="text" name="LName" required="" maxlength="50" /></td>
  </tr>
  <tr>
    <td>
      <div>
        วันเกิด
        <td><input type="date" name="birthday" required=""></td>
      </div> </td>
    </tr>
    <tr>
      <td>
        <div>  หมายเลขบัตรประจำตัวประชาชน
          <td> <input type="text" name="IdCard" required="" maxlength="13"></td>
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div>
          ที่อยู่
          <td><textarea name="address" rows="5" cols="40" required=""></textarea></td>
        </div> </td>
      </tr>
      <tr>
        <td>
          <div>  E-Mail
            <td><input type="text" name="email" required="" maxlength="50"></td>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div>  เบอร์โทร
            <td> <input type="text" name="phone" required="" maxlength="10"></td>
          </div></td>
          <tr>
            <td>เลือกระดับสมาชิก : </td>
            <td><input type="radio" name="MemPos"  value="0">สมาชิกทั่วไป</td>
            <td><input type="radio" name="MemPos" value="1">สมาชิกพรีเมี่ยม</td>
          </td>
        </tr>
        <br>
        <tr>
          <td colspan="1"></td>
          <td><button type="submit" class="btn btn-info pull" >ยืนยัน</button></td>
        </tr>
      </table>
    </form>
  </div>
</section>
</div>

  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/libs/js/functions.js"></script>
</body>
</html>