<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>หน้าแรก    </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
  <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/main.css" />

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/DataTables-1.10.13/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/DataTables-1.10.13/media/js/dataTables.bootstrap.js"></script>
 

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
              <img src="" alt="user-image" class="img-circle img-inline">
              <span>  User <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">
                  <i class="glyphicon glyphicon-user"></i>
                  ข้อมูลส่วนตัว
                </a>
              </li>
              <li>
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
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>ตารางออกรอบ</span>
    </a>
 </li>
</ul>
    <table>
        <tr>
           <td>ID : </td>
           <td><input type="text" name="id" required="" value=<?php echo $id; ?>  readonly /></td>
       </tr>
       <tr>
           <td>UserName : </td>
           <td><input type="text" name="username"    /></td>
       </tr>
       <tr>
           <td>PassWord : </td>
           <td><input type="text" name="password"  /></td>
           
       </tr>
       <tr>
        <td>ชื่อ : </td>
        <td><input type="text" name="FName"  /></td>

    </tr>
    <td>นามสกุล : </td>
    <td><input type="text" name="LName"  /></td>

</tr>
<td>ที่อยู่ : </td>
<td><input type="textarea" name="Address" /></td>

</tr>
<td>เบอร์โทร : </td>
<td><input type="text" name="Phone" value="" OnKeyPress="return chkNumber(this)" maxlength="10"  /></td>

</tr>
<td>E-Mail : </td>
<td><input type="text" name="Email" maxlength="50"  /></td>

</tr>
<tr>
   <td colspan="1"></td>
   <td><input type="submit" value="แก้ไข"/></td>
</tr>
</table>


</div>

<div class="page">
  <!-- /MAIN body --> 
  
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/libs/js/functions.js"></script>
</body>
</html>






