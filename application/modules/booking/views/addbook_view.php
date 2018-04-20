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
 <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>บันทึกเช่า-คืนอุปกรณ์</span>
    </a>
 </li>
</ul>


</div>


  <!-- /MAIN body --> 
  <div class="page">
  <section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>เพิ่มรายการจอง</span>
          </strong>
        </div>
        <div class="panel-body">

    <?php echo form_open('Booking/validate'); ?>

    <div class="post"> 
<form action="/action_page.php" >

<div class="form-group">
    <label>ชื่อ :</label>
    <input class="form-control" id="fname" type="text" name="fname" required>
  </div>

  <div class="form-group">
    <label>สกุล :</label>
    <input class="form-control" id="lname" type="text" name="lname" required>
  </div>

   <div class="form-group">
    <label>เบอร์โทร :</label>
    <input class="form-control" type="phone" value="" OnKeyPress="return chkNumber(this)" id="Phone" type="text" name="Phone" required>
  </div>

  <div class="form-group">
    <label>วัน :</label>
    <input class="form-control" id="datePlay" type="date" name="DayBook" required>
  </div>

  <div class="form-group">
    <label>เลือกจำนวนหลุม:</label>
   <input  id="hole9" type="radio" name="Hole"  value="9" checked>9 หลุม
   <input  id="hole18" type="radio" name="Hole" value="18">18 หลุม 
  </div>

  <div class="form-group">
    <label >เวลา:</label>
    <select class="form-control" id="timeplay" name="Timebook" class="selectpicker  required">
        <option value="1" selected >17.00-19.00</option>
    </select>
  </div>

   <div class="form-group">
    <label >Course :</label>
    <select class="form-control" id="course" name="Course">
                    <option value="" selected></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select> 
   </div>

   <div class="form-group">
    <label >จำนวนผู้เล่น :</label>
    <select class="form-control" id="person" name="Person">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
   </div>

  <div class="form-group">
    <label>จำนวนแคดดี้:</label>
    <select class="form-control" id="caddyNum" name="CaddyNum">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select> 
  </div>

  <div class="form-group">
    <label>รถกอล์ฟ :</label>
    <select class="form-control" id="carNum" name="CarNum">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
  </div>

   <div class="form-group">
    <label >ไม้กอล์ฟ:</label>
    <select class="form-control" id="InsNum" name="InsNum">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
  </div>

   <div class="form-group">
    <label >ราคารวม :</label>
    <input class="form-control" type="text" class="" name="email" disabled>
  </div>
  <button id="calPrice" type="button" class="btn btn-info pull" />คำนวณราคา</button>
  <button type="submit" class=" btn btn-info pull">ตกลง</button>

  
</form>
</div>

 </div><!-- /.content -->
  </section><!-- /MAIN --> 
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#hole9').click(function(event) {
            if ($(this).is(':checked'))
               $('#timeplay').html(`
                        <option value="1"  >17.00-19.00</option>
                `)
       });
 
        $('#hole18').click(function(event) {
            if ($(this).is(':checked')){
               $('#timeplay').html(`
                        <option value="2" selected >6.00-11.30</option>
                        <option value="3"  >11.30-15.00</option>
                        <option value="4"  >15.00-19.00</option>
                `)

               $('#course').val('');

              $('#course').prop('disabled', 'disabled');
                        
                        
                

                
           }
       });

        $('#calPrice').click(function(event) {
            var datePlay=$('#datePlay').val();
            var timeplay=$('#timeplay').val();
            var course=$('#course').val();
            var person=$('#person').val();
            var caddyNum=$('#caddyNum').val();
            var carNum=$('#carNum').val();
            var InsNum=$('#InsNum').val();
            
            var PricePerson = <?php echo $PricePerson?>;
            var PriceIns = <?php echo $PriceIns?>;
            var PriceCar = <?php echo $PriceCar?>;
               var PriceCaddy = <?php echo $PriceCaddy?>;
               
            ///หาวัน 0-6 0=อาทิตย์
            var day= new Date(datePlay);
            /*alert(day.getDay());*/

            //9หลุม 17.00-19.00

            if (day.getDay()==0&&timeplay==1) 
                var sum1=1000;

            if (day.getDay()==1&&timeplay==1) 
                var sum1=800;

            if (day.getDay()==2&&timeplay==1) 
                var sum1=800;

            if (day.getDay()==3&&timeplay==1) 
                var sum1=600;

            if (day.getDay()==4&&timeplay==1) 
                var sum1=800;

            if (day.getDay()==5&&timeplay==1) 
                var sum1=800;

            if (day.getDay()==6&&timeplay==1) 
                var sum1=1000;
            /////////18หลุม 06-11.30

            if (day.getDay()==0&&timeplay==2) 
                var sum1=1500;

            if (day.getDay()==1&&timeplay==2) 
                var sum1=1300;

            if (day.getDay()==2&&timeplay==2) 
                var sum1=1300;

            if (day.getDay()==3&&timeplay==2) 
                var sum1=1000;

            if (day.getDay()==4&&timeplay==2) 
                var sum1=1300;

            if (day.getDay()==5&&timeplay==2) 
                var sum1=1300;

            if (day.getDay()==6&&timeplay==2) 
                var sum1=1500;
            ////////11.30-15.00

            if (day.getDay()==0&&timeplay==3) 
                var sum1=1200;

            if (day.getDay()==1&&timeplay==3) 
                var sum1=1000;

            if (day.getDay()==2&&timeplay==3) 
                var sum1=1000;

            if (day.getDay()==3&&timeplay==3) 
                var sum1=1000;

            if (day.getDay()==4&&timeplay==3) 
                var sum1=1000;

            if (day.getDay()==5&&timeplay==3) 
                var sum1=1000;

            if (day.getDay()==6&&timeplay==3) 
                var sum1=1000;

            if (day.getDay()==0&&timeplay==3) 
                var sum1=1200;

            ////// 15.00-19.00

            if (day.getDay()==0&&timeplay==4) 
                var sum1=1400;

            if (day.getDay()==1&&timeplay==4) 
                var sum1=1200;

            if (day.getDay()==2&&timeplay==4) 
                var sum1=1200;

            if (day.getDay()==3&&timeplay==4) 
                var sum1=1000;

            if (day.getDay()==4&&timeplay==4) 
                var sum1=1200;

            if (day.getDay()==5&&timeplay==4) 
                var sum1=1200;

            if (day.getDay()==6&&timeplay==4) 
                var sum1=1400;

            
            var sum=(sum1+(person*PricePerson)+(caddyNum*PriceCaddy)+(carNum*PriceCar)+(InsNum*PriceIns));

            alert(sum);


        });
    });




</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/libs/js/functions.js"></script>
</body>
</html>