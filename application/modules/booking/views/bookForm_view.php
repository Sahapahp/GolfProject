<!DOCTYPE html >
<html ><head>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/images/PixelGreen.css" type="text/css" /><title>Rachet Golf</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>
</head>


<?php if($this->session->flashdata('done')): ?>
              <div>
                <div class="alert alert-success">
  <strong>Success!</strong> สมัครสมาชิกสำเร็จแล้ว
</div> 
              </div>
            <?php endif; ?>
<body class="container">

	<!-- wrap starts here -->
	<div id="wrap">
		<div id="header">
			<div id="header-content">
				<h1 id="logo"><a href="index.html" title="">Rachet Golf<span class="white">Club</span></a></h1>

				<!-- Menu Tabs -->
				<ul>
					<li><a href="<?php echo base_url();?>" >หน้าแรก</a></li>
                    <li><a href="<?php echo base_url();?>Booking/callbookForm" id="current">จอง</a></li>
					<li><a href="<?php echo base_url();?>Regis/callformregis">สมัครสมาชิก</a></li>
					<li><a href="<?php echo base_url();?>Login/loginAll">เข้าสู่ระบบ</a></li>
					<li><a href="index.html">ติดต่อ</a></li>
				</ul>
			</div>
		</div>

<div  class="container">
	<div class="post"> 
		<h1>จอง</h1>
<?php echo form_open('Booking/validateForm'); ?>
<form action="/action_page.php" >
  <div class="form-group">
    <label>วัน :</label>
    <input id="datePlay" type="date" name="DayBook" required>
  </div>

  <div class="form-group">
    <label>เลือกจำนวนหลุม:</label>
   <input id="hole9" type="radio" name="Hole"  value="9" checked>9 หลุม
   <input id="hole18" type="radio" name="Hole" value="18">18 หลุม 
  </div>

  <div class="form-group">
    <label >เวลา:</label>
    <select id="timeplay" name="Timebook" class="selectpicker  required">              
    	<option value="1" selected >17.00-19.00</option>
    </select>
  </div>

   <div class="form-group">
    <label >Course :</label>
    <select id="course" name="Course">
                    <option value="" selected></option>
                    <option value="A">A เริ่มหลุม1-9</option>
                    <option value="B">B เริ่มหลุม9-1</option>
                    <option value="C">C เริ่มหลุม9-18</option>
                    <option value="D">D เริ่มหลุม18-9</option>
                </select> 
   </div>

   <div class="form-group">
    <label >จำนวนผู้เล่น :</label>
    <select id="person" name="Person">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
   </div>

  <div class="form-group">
    <label>จำนวนแคดดี้:</label>
    <select id="caddyNum" name="CaddyNum">
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
    <select id="carNum" name="CarNum">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
  </div>

   <div class="form-group">
    <label >ไม้กอล์ฟ:</label>
    <select id="InsNum" name="InsNum">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 
  </div>

   <div class="form-group">
    <label >ราคารวม :</label>
    <input type="text" class="" name="email" disabled>
  </div>

  <button type="submit" class="btn btn-default">ตกลง</button>

  
</form>
</div>


		
		<!-- footer  -->
		<div id="footer">
			<div id="footer-content">
				<div class="col float-left">
					<h1>ติดต่อเรา</h1>
					<ul>
						<li><a href="http://www.dreamhost.com/r.cgi?287326"><strong>FaceBook</strong>
						- Rachet Golf Club</a></li>
						<li><a href="http://www.4templates.com/?aff=ealigam"><strong>Instragram</strong>
						- Rachet Golf Club</a></li>
						<li><p><strong>คุณราเชษฐ์ 09-10601197</strong>

						</ul>
					</div>
					<div class="col float-left">
						<h1>Links</h1>
						<ul>
							<li><a href="#">หน้าแรก</a></li>
							<li><a href="#">สมัครสมาชิก</a></li>
							<li><a href="#">จอง</a></li>
							<li><a href="#">รูปภาพสนาม</a></li>
						</ul>
					</div>
					<div class="col2 float-right">
						<p> © copyright 2006 <strong>Rachet Golf Club</strong><br />
						</div>
					</div>
				</div>
			</div>
			<div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">
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
		</body>

		</html>