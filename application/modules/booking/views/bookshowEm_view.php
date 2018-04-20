<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>รายการจอง    </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/main.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/DataTables-1.10.16/datatables.min.js" />

</head>
<body>
  <!-- หน้าจัดการแอดมิน -->
   <!-- หน้าจัดการแอดมิน -->
    <!-- หน้าจัดการแอดมิน -->
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
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>รายการจอง</span>
       </strong>
         <a href="Booking/formaddbook" class="btn btn-info pull-right">สร้างรายการจองใหม่</a>
      </div>
     <div class="panel-body">

      <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ชื่อ-สกุล</th>
            <th class="text-center">หลุม</th>
            <th class="text-center">วัน</th>
            <th class="text-center">เวลา</th>
            <th class="text-center" style="width: 100px;">จัดการ</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ชื่อผู้ใช้</th>
            <th class="text-center">ชื่อ</th>
            <th class="text-center">นามสกุล</th>
            <th class="text-center">ตำแหน่ง</th>
            <!-- <th class="text-center">สถานะ</th> -->
            <th class="text-center" style="width: 100px;">จัดการ</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
           <?php if ( isset($booking) && is_array($booking) ): ?>
			<?php foreach ( $booking as $key ): ?>

         <?php if ($key->Timebook==6) {
                  $key->Timebook="06.00 – 11.30";
                }else if ($key->Timebook==7) 
                {
                 $key->Timebook="11.30 – 15.00";
               }else if ($key->Timebook==8) {
                 $key->Timebook="15.00 – 19.00";
               }else  {
                 $key->Timebook="17.00 – 19.00";
               }
               ?>
         <!--  <?php if ($key->OnlineStatus==0) {
                  $key->OnlineStatus="ใช้งาน";
                }else{
                 $key->OnlineStatus="ไม่ใช้งาน";
               }?>  -->

			<?php echo "<td class='text-center'>" .$key->IdBooking .
      "<td class='text-center'>".$key->fname  ." ".  $key->lname.
      "</td> <td class='text-center'>". $key->Hole ."</td> "; ?>
			<?php echo "<td class='text-center'>" .$key->DayBook .
      "</td> <td class='text-center'>". $key->Timebook ."</td>"; ?>
       <td>
             <div class="btn-group text-center">
                <a href="edit_user.php?id=9" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
                  <i class="glyphicon glyphicon-pencil"></i>
               </a>
                <a href="booking/delete/?id=<?php echo $key->IdBooking; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
                  <i class="glyphicon glyphicon-remove"></i>
                </a>
                </div>
           </td>
    </tr>

			<?php endforeach; ?>
			<?php else: ?>
				ไม่มีข้อมูล
			<?php endif; ?>
          </tbody>
     </table>
     </div>

    </div><!-- /.content -->
  </section><!-- /MAIN --> 
</div>
 <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/libs/js/functions.js"></script>
</body>
</html>






