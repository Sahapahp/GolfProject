<!DOCTYPE html >
<html ><head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/images/PixelGreen.css" type="text/css" /><title>Rachet Golf</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
            body{background-image: url(<?php echo base_url(); ?>assets/images/bg.jpg);
                 background-size: cover; 
                 background-repeat: no-repeat;}
            </style>
        <script language="JavaScript">
            function chkNumber(ele)
            {
                var vchar = String.fromCharCode(event.keyCode);
                if ((vchar < '0' || vchar > '9') && (vchar != '.'))
                    return false;
                ele.onKeyPress = vchar;
            }
        </script>
    </head>

    <body class="container">

        <!-- wrap starts here -->
        <div id="wrap">
            <div id="header">
                <div id="header-content">
                    <h1 id="logo"><a href="index.html" title="">Rachet Golf<span class="white">Club</span></a></h1>

                    <!-- Menu Tabs -->
                    <ul>
                        <li><a href="<?php echo base_url(); ?>" >หน้าแรก</a></li>
                        <li><a href="<?php echo base_url(); ?>Booking/callbookForm">จอง</a></li>
                        <li><a href="<?php echo base_url(); ?>Regis/callformregis" id="current">สมัครสมาชิก</a></li>
                        <li><a href="<?php echo base_url(); ?>Login/loginAll">เข้าสู่ระบบ</a></li>
                        <li><a href="index.html">ติดต่อ</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container" style="background-color:white">
            <div class="post" style="text-align: left;"> 
                <h1 class="text-center">สมัครสมาชิก</h1>
                <?php echo form_open('Regis/validateRegis'); ?>
                <div style="margin: 0px 0px 0px 350px; padding: auto;">
                    <?php if($message!=""){?>
                    <div style="width: 300px;">
                                <div class="alert alert-warning">
                                    <strong>ล้มเหลว!</strong> <?php echo $message;?>
                                </div> 
                            </div>
                        
                    <?php }?>
                <form>
                    <h3 class="">ข้อมูลส่วนตัว</h3>
                    <div class="form-group">
                        <label for="text">ชื่อ :</label>
                        <input type="text" value="<?php if($message!=""){echo $Member['FName'];}?>" class="form" name="FName" required>
                    </div>

                    <div class="form-group">
                        <label for="text">นามสกุล :</label>
                        <input type="text" value="<?php if($message!=""){echo $Member['LName'];}?>" class="form" name="LName" required>
                    </div>

                    <div class="form-group">
                        <label for="text">วันเกิด :</label>
                        <input type="date" value="<?php if($message!=""){echo $Member['birthday'];}?>" name="birthday" class="form" required>
                    </div>

                    <div class="form-group">
                        <label for="text">หมายเลขบัตรประจำตัวประชาชน :</label>
                        <input type="text" class="form" value="<?php if($message!=""){echo $Member['idCard'];}?>" name="IdCard" OnKeyPress="return chkNumber(this)" required maxlength="13">
                    </div>

                    <div class="form-group">
                        <label for="text">ที่อยู่ :</label>
                        <input type="textarea" value="<?php if($message!=""){echo $Member['address'];}?>" class="form" name="address" required>
                    </div>


                    <div class="form-group">
                        <label for="text">เบอร์โทรศัพท์ :</label>
                        <input type="text" class="form" value="<?php if($message!=""){echo $Member['phone'];}?>" name="phone" OnKeyPress="return chkNumber(this)" required maxlength="10">
                    </div>
                    <hr>
                    <h3 class="">ข้อมูลการเข้าใช้งาน</h3>
                    
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input type="email" value="<?php if($message!=""){echo $Member['email'];}?>" class="form" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="username">UserName :</label>
                        <input type="username" class="form" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="pwd">Re-Password:</label>
                        <input type="password" class="form" name="repassword" required>
                    </div>

                    <div class="form-group">
                        <label for="text">เลือกระดับสมาชิก :</label>
                        <input type="radio" name="MemPos"  value="0" checked>สมาชิกทั่วไป
                        <input type="radio" name="MemPos"  value="1">สมาชิกพรีเมี่ยม
                    </div>
                    <button type="submit" class="btn btn-default">ตกลง</button>


                </form>
                    </div>
                
            </div>



            <!-- footer  -->
            <div id="footer" style="background-color:#fff">
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
                            <li><a href="<?php echo base_url(); ?>" id="current">หน้าแรก</a></li>
                            <li><a href="<?php echo base_url(); ?>Regis/callformregis">สมัครสมาชิก</a></li>
                            <li><a href="<?php echo base_url(); ?>Booking/callbookForm">จอง</a></li>
                            <li><a href="<?php echo base_url(); ?>Regis/showimg">รูปภาพสนาม</a></li>
                        </ul>
                    </div>
                    <div class="col2 float-right">
                        <p> © copyright 2017 <strong>Rachet Golf Club</strong><br />
                    </div>
                </div>
            </div>
        </div>
        <div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">
        </div>
    </body>

</html>