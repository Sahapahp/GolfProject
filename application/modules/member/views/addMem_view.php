<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

	<script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>
<body>
  <!-- หน้าจัดการพนักงาน -->
   <!-- หน้าจัดการพนักงาน -->
    <!-- หน้าจัดการพนักงาน -->
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
 <div class="sidebar">
  <!-- admin menu -->
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
      <a href="/GolfProject/member/memShowEm" class="submenu-toggle">
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
</ul>
</div>
  <!-- /MAIN body --> 
  <section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>เพิ่มข้อมูลสมาชิก</span>
          </strong>
        </div>
        <div class="panel-body">
                <?php echo form_open('Member/validate'); ?> 
    <form>   
      <div class="form-group"> Username : 
      <input class="form-control" type="text" name="UserName" required="" />
    </div>

     <div class="form-group"> Password : 
      <input class="form-control" type="text" name="Password" required="" />
    </div>

    <div class="form-group"> ยืนยัน Password : 
      <input class="form-control" type="text" name="RePassword" required="" />
    </div>

    <div class="form-group"> ชื่อ : 
      <input class="form-control" type="text" name="FName" required="" />
    </div>

    <div class="form-group">
        นามสกุล : 
        <input class="form-control" type="text" name="LName" required="" />
    </div>

    <div class="form-group">
            วันเกิด
            <input class="form-control" type="date" name="Birthday"> 
  </div>

   <div class="form-group"> 
        หมายเลขบัตรประจำตัวประชาชน
        <input class="form-control" type="text" name="IdCard" required="" maxlength="13" value="" OnKeyPress="return chkNumber(this)"> 
   </div>

    <div class="form-group">
        ที่อยู่ : 
        <textarea class="form-control" type="Address" name="Address"> </textarea> 
</div>

<div class="form-group">
       เบอร์โทร : 
        <input class="form-control" type="text" name="Phone" value="" OnKeyPress="return chkNumber(this)" maxlength="10" />
</div>

<div class="form-group">
        E-Mail : 
        <input class="form-control" type="Email" name="Email" maxlength="50" />
</div>

<div class="form-group">
        ระดับสมาชิก : 
         <select class="form-control" name ="MemPos">
          <option value="0 ">สมาชิกทั่วไป</option>
          <option value="1">สมาชิกพรีเมี่ยม</option>
      </select>
</div>
 <!--  <tr>
         สถานะการใช้งาน : </td>
          <select name ="OnlineStatus">
          <option value="0 ">ใช้งาน</option>
          <option value="1">ไม่ใช้งาน</option>
      </select></td>
  </tr> -->  
          <input type="submit" colspan="1" class="btn btn-info   pull-right" value="ยืนยัน"/></td>
</form>
      </div>
    </div><!-- /.content -->
  </section><!-- /MAIN --> 
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/libs/js/functions.js"></script>
</body>
</html>