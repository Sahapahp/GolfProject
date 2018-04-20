
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>แก้ไขพนักงาน    </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/main.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/DataTables-1.10.16/datatables.min.js" />
</head>
<body>
    <?php
    $id = $_GET['id']; 
    ?>
    <?php echo form_open('Employee/updateAdd'); ?> </h1>

    <script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>
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
 
<!-- sideMenU -->
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

  <!-- /MAIN body --> 
 <div class="page">
  <!-- /MAIN body --> 
  <section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 
     
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>พนักงาน</span>
       </strong>
         <a href="#" class="btn btn-info pull-right">เปลี่ยนรหัสผ่าน</a>
      </div>
     <div class="panel-body">

    
          <div class="form-group"> 
             ID :   
             <input class="form-control" type="text" name="id" required="" value=<?php echo $id; ?>  readonly />     
    </div> 

         <div class="form-group"> 
             UserName :   
          <input class="form-control" type="text" name="username" required="" maxlength="50"  /> 
          </div> 

          <div class="form-group">
             PassWord :   
             <input class="form-control" type="text" name="password" required="" maxlength="50"  /> 
          </div>   
           
           <div class="form-group">
          ชื่อ :   
          <input class="form-control" type="text" name="FName" required="" maxlength="50"  /> 
          </div>   

       <div class="form-group">
      นามสกุล :   
       <input class="form-control" type="text" name="LName" required="" maxlength="50"  /> 
          </div> 

          <div class="form-group">
          ที่อยู่ :   
           <input class="form-control" type="textarea" name="Address" required="" maxlength="50"  /> 
          </div>  

          <div class="form-group">
            เบอร์โทร :   
            
            <input class="form-control" type="text" name="Phone" value="" OnKeyPress="return chkNumber(this)" maxlength="10"  /> 
          </div> 

  <div class="form-group">
  E-Mail :   
   <input class="form-control" type="email" name="Email" required="" maxlength="50"> 
    </div> 

  
  <div class="form-group">
      ตำแหน่ง :   
       <select class="form-control" name ="Position">
      <!-- <option value="0 ">พนักงาน</option> -->
      <option value="1">แคดดี้</option>
  </select>  </div> 
  
  <div class="form-group">
      สถานะการใช้งาน :   
       <select class="form-control" name ="OnlineStatus">
      <option value="0 ">ใช้งาน</option>
      <option value="1">ไม่ใช้งาน</option>
  </select>  </div> 
  
  
<input  type="submit" colspan="1" class="btn btn-info  pull-right" value="ยืนยัน"/> 
  

</form>

</body>
</html>