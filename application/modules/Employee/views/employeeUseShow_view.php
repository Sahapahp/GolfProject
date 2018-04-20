<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>หน้าแรก    </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/main.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/libs/DataTables-1.10.16/datatables.min.js" />
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
              <img src="pic_profile/5a58861ec7977.png" alt="user-image" class="img-circle img-inline">
              <span> Admin User <i class="caret"></i></span>
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
      <a href="/GolfProject/Employee/callshow" class="submenu-toggle">
        <i class="glyphicon glyphicon-user"></i>
        <span>จัดการแคดดี้</span>
      </a>
    </li>
    <li>
       <a href="/GolfProject/Member/callshow">
        <i class="glyphicon glyphicon-user"></i>
        <span>จัดการสมาชิก</span>
      </a>
      </li>
    <li>
      <a href="/GolfProject/booking/callshow" class="submenu-toggle">
        <i class="glyphicon glyphicon-th-list"></i>
        <span>การจอง</span>
      </a>
      <ul class="nav submenu">
       <li><a href="sales.php">ดูการการจอง</a> </li>
     </ul>
   </li>
    <li>
      <a href="/GolfProject/Instrument/callshow" class="submenu-toggle">
        <i class="glyphicon glyphicon-th-list"></i>
        <span>จัดการอุปกรณ์</span>
      </a>
   </li>
 </ul>
     </ul>
   </li>
    <li>
      <a href="/GolfProject/Instrument/callshow" class="submenu-toggle">
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
          <span>พนักงาน</span>
       </strong>
         <a href="formAddEmp" class="btn btn-info pull-right">เพิ่มพนักงานใหม่</a>
      </div>
     <div class="panel-body">

 <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ชื่อผู้ใช้</th>
            <th class="text-center">ชื่อ</th>
            <th class="text-center">นามสกุล</th>
            <th class="text-center">ตำแหน่ง</th>
            <th class="text-center">สถานะ</th>
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
            <th class="text-center">สถานะ</th>
            <th class="text-center" style="width: 100px;">จัดการ</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach ( $employee as $key ): ?>
            <tr>
                <?php if ($key->Position==0) {
                $key->Position="พนักงาน";
            }else{
                $key->Position="แคดดี้";
           }?>
           <?php if ($key->OnlineStatus==0) {
                $key->OnlineStatus="ใช้งาน";
          }else{
                $key->OnlineStatus="ไม่ใช้งาน";
         }?>
         <?php echo "<td class='text-center'>" .$key->IdEmp .
                    "</td> <td class='text-center'>". $key->UserName ."</td> "; ?>
         <?php echo "<td class='text-center'>" .$key->FName .
                    "</td> <td class='text-center'>". $key->LName .
                    "</td><td class='text-center '>". $key->Position .
                    "</td>  <td class='text-center'>". $key->OnlineStatus ."</td> "; ?>
       <td>
          <div class="btn-group text-center">
            <a href="formUpdateEmp?id=<?= $key->IdEmp ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>

            <a href="employee/delete/?id=<?php echo $key->IdEmp; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
              <i class="glyphicon glyphicon-remove"></i>
            </a>
          </div>
        </td>
      </tr>
  <?php endforeach; ?>
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






