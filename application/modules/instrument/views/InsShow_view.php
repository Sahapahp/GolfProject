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
               <a href="#">
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
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>พนักงาน</span>
          </strong>
          <a href="formAddIns" class="btn btn-info pull-right">เพิ่มอุปกรณ์ใหม่</a>
          <!-- <a href="formAddIns" class="btn btn-info pull-right">แก้ไขราคาอุปกรณ์</a> -->
        </div>


        <div class="panel-body">
    <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">ชื่ออุปกรณ์</th>
              <th class="text-center">ชนิด</th>
              <th class="text-center">จัดการ</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">ชื่ออุปกรณ์</th>
              <th class="text-center">ชนิด</th>
              <th class="text-center">จัดการ</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
             <?php if ( isset($Instrument) && is_array($Instrument) ): ?>

               <?php foreach ( $Instrument as $key ): ?>

                 <?php if ($key->typeIns==0) {
                     $type = $key->typeIns;
                  $key->typeIns="ไม้กอล์ฟ";
                  
                }else{
                    $type = $key->typeIns;
                 $key->typeIns="รถกอล์ฟ";
               }?>
               <?php echo "<td class='text-center'>" .$key->IdIns ."</td> <td class='text-center'>". $key->NameIns ."</td> "; ?>
               <?php echo "<td class='text-center'>" .$key->typeIns ."</td> "; ?>
               <td>
             <div class="btn-group text-center">
                <a href="Instrument/formUpdate/?id=<?php echo $key->IdIns; ?>&NameIns=<?php echo $key->NameIns?>&type=<?php echo $type; ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
                  <i class="glyphicon glyphicon-pencil"></i>
               </a>
                <a href="Instrument/delete/?id=<?php echo $key->IdIns; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
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






