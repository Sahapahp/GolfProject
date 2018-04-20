<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/main.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/DataTables-1.10.16/datatables.min.js" />
    <script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>
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
              <img src="<?php echo base_url();?>assets\dist\img/avatar5.png" alt="user-image" class="img-circle img-inline">
              <span> พนักงาน <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">
                  <i class="glyphicon glyphicon-user"></i>
                  ข้อมูลส่วนตัว
                </a>
              </li>
              <li>
               <a href="#" title="edit account">
                 <i class="glyphicon glyphicon-cog"></i>
                 ตั้งค่า
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
      <a href="/GolfProject/Member/callemtyEm" class="submenu-toggle">
        <i class="glyphicon glyphicon-home"></i>
        <span>หน้าแรก</span>
      </a>
    </li>
    <li>
      <a href="/GolfProject/Employee/callcaddyshow" class="submenu-toggle">
        <i class="glyphicon glyphicon-user"></i>
        <span>จัดการแคดดี้</span>
      </a>
    </li>
    <li>
      <a href="/GolfProject/member/memshowem" class="submenu-toggle">
        <i class="glyphicon glyphicon-user"></i>
        <span>จัดการสมาชิก</span>
      </a>
    </li>
  <li>
    <a href="/GolfProject/booking/bookshowem" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>การจอง</span>
    </a>
 </li>
  <li>
    <a href="/GolfProject/Instrument/insshowem" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>จัดการอุปกรณ์</span>
    </a>
 </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>โปรโมชั่น</span>
    </a>
 </li>
 <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>บันทึกเช่า-คืนอุปกรณ์</span>
    </a>
 </li>
</ul>
</div>
<div class="page">
  <!-- /MAIN body --> 
  <section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 
    	<div class="panel panel-default">
      <div class="panel-heading clearfix">
      	<span class="glyphicon glyphicon-th"></span>
          <span>เพิ่มอุปกรณ์</span>
      </div>
      <div class="panel-body">	
	<?php echo form_open('Instrument/validate'); ?>
	
		 <div class="form-group">
			 ชื่ออุปกรณ์ :  
			 <input class="form-control" type="text" name="InsName" required="" />   
		 </div>
          <div class="form-group">
              เลือกชนิดอุปกรณ์ : 
              <select class="form-control" name ="typeIns">
                  <option value="0">ไม้กอล์ฟ</option>
                  <option value="1">รถกอล์ฟ 4 ที่นั่ง</option>
                  <option value="2">รถกอล์ฟ 6 ที่นั่ง</option>
              </select> 
          </div>
		 
			
			 <input colspan="2" type="submit" class="btn btn-info pull-right" value="ยืนยัน"/> 
		 
	
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