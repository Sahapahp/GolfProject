<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>หน้าแรก    </title>
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
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="<?php echo base_url();?>assets\dist\img/avatar.png" alt="user-image" class="img-circle img-inline">
              <span> Admin  <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">
                  <i class="glyphicon glyphicon-user"></i>
                  ข้อมูลส่วนตัว
                </a>
              </li>
             <li class="last">
               <a href="/GolfProject/Login/Logout">
                 <i class="glyphicon glyphicon-off"></i>
                 ออกจากระบบ
               </a>
             </li>
           </ul>
         </li>
       </ul>
     </div>
   </div>
 </header>
<div class="sidebar">
  <ul>
    <li>
      <a href="/GolfProject/Employee/callemty" class="submenu-toggle">
        <i class="glyphicon glyphicon-home"></i>
        <span>หน้าแรก</span>
      </a>
    </li>
    <li>
    <li>
      <a href="/GolfProject/Employee/callshow" class="submenu-toggle">
        <i class="glyphicon glyphicon-user"></i>
        <span>จัดการพนักงาน</span>
      </a>
    </li>
    <li>
       <a href="/GolfProject/Member/callshow">
        <i class="glyphicon glyphicon-user"></i>
        <span>จัดการสมาชิก</span>
      </a>
      </li>
 </ul>
</div>

<div class="page">
  <!-- /MAIN body --> 
  <section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 
     
    
     
     <div class="panel-body">

<script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>
<section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 
     
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>เพิ่มพนักงาน</span>
       </strong>
      </div>
      <div class="panel-body">

    <?php echo form_open('Employee/validateAdd'); ?>
    <form >
    <div class="form-group">   
         Username :  
         <input class="form-control" type="text" name="username" required="" maxlength="20" />   
    </div> 
     
     <div class="form-group"> 
         Password :  
         <input class="form-control" type="password" name="password" required="" maxlength="20" /> 
    </div>
    <div class="form-group">
         ยืนยัน Password :  
         <input class="form-control" type="password" name=" repassword" required="" maxlength="20" /> 
    </div>
    <div class="form-group">
        ชื่อ :  
        <input class="form-control" type="text" name="FName" required=""  maxlength="50" />   
    </div>
    
    <div class="form-group">
        นามสกุล :  
        <input class="form-control" type="text" name="LName" required="" maxlength="50" /> 
    </div>

 
 
  <div class="form-group">
            วันเกิด
            <input class="form-control" type="date" name="birthday"> 
  </div>  
   <div class="form-group"> 
        หมายเลขบัตรประจำตัวประชาชน
        <input class="form-control" type="text" name="IdCard" required="" maxlength="13" value="" OnKeyPress="return chkNumber(this)"> 
   </div>
    
    <div class="form-group">
            ที่อยู่
            <textarea class="form-control" name="address" rows="5" cols="40" required="" ></textarea> 
    </div>  
     
    <div class="form-group"> 
         E-Mail
            <input class="form-control" type="email" name="email" required="" maxlength="50"> 
    </div>
    
   <div class="form-group">  
            เบอร์โทร
            <input class="form-control" type="text" name="phone" required="" maxlength="10" value="" OnKeyPress="return chkNumber(this)"> 
  </div>  

   <div class="form-group">
       ตำแหน่ง :  
      <select class="form-control" name ="Position">
        <option value="0">พนักงาน</option>
        <option value="1">แคดดี้</option>
      </select> 
  </div>

         <input  type="submit" colspan="1" class="btn btn-info  pull-right" value="ยืนยัน"/> 
         
</form>
  </div>
    </div><!-- /.content -->
  </section><!-- /MAIN --> 
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/libs/js/functions.js"></script>

</body>
</html>






