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
 <div class="sidebar">
  <!-- admin menu -->
  <ul>
    <li>
      <a href="admin.php">
        <i class="glyphicon glyphicon-home"></i>
        <span>หน้าควบคุม</span>
      </a>
    </li>
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
  <li>
    <a href="/GolfProject/Booking/callshow" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>การจอง</span>
    </a>
 </li>
  <li>
      <a href="/GolfProject/Instrument/callshow" class="submenu-toggle">
        <i class="glyphicon glyphicon-th-list"></i>
        <span>จัดการอุปกรณ์</span>
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
          <a href="formAddAdmin" class="btn btn-info pull-right">สร้างแอดมินใหม่</a>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">ชื่อผู้ใช้</th>
              <th class="text-center">รหัสผ่าน</th>
              <th class="text-center" style="width: 100px;">จัดการ</th>
            </tr>
            <tr>
             <?php if ( isset($admin) && is_array($admin) ): ?>
               <?php foreach ( $admin as $key ): ?>

                 <?php echo "<td class='text-center'>" .$key->IdAdmin ."</td> <td class='text-center'>". $key->UserName ."</td> "; ?>
                 <?php echo "<td class='text-center'>" .$key->Password ."</td>"; ?>
                 <td>
                   <div class="btn-group text-center">
                    <?php echo '<a href= "admin/formUpdateAdmin?id='.$key->IdAdmin.'" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข" />' ?>
                      <i class="glyphicon glyphicon-pencil"></i>
                    </a>
                    <a href="admin/delete/?id=<?php echo $key->IdAdmin; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
                      <i class="glyphicon glyphicon-remove"></i>
                    </a>
                  </div>
                </td>
              </tr>

            <?php endforeach; ?>
          <?php else: ?>
            ไม่มีข้อมูล
          <?php endif; ?>
          
        </table>
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






