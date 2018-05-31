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
<?php
                $id = "";
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                ?>
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
                <h1 class="text-center">ชำระเงินค่าสมัคร สำหรับสมาชิกพรีเมียม</h1>
                
                <p class="text-center">
                    ชำระเงินผ่านระบบ Paypal คลิก<br>
                    <form class="paypal" action="" method="post" id="paypal_form" target="_blank">
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="no_note" value="1" />
                        <input type="hidden" name="lc" value="TH" />
                        <input type="hidden" name="currency_code" value="THB" />
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <input type="hidden" name="first_name" value="ราเชษฐ์" />
                        <input type="hidden" name="last_name" value="ญาติอภิรักษ์" />
                        <input type="hidden" name="payer_email" value="Rachet_GolfClub@hotmail.com" />
                        <input type="hidden" name="item_number" id="item_number" value="<?php echo $id;?>" />
                        <input type="hidden" name="product_name" id="product_name" value="ชำระเงินค่าสมัคร สำหรับสมาชิกพรีเมียม" />
                        <input type="hidden" name="statusPay" value="register" />
                        <button type="submit" id="btnSubmit" class="btn btn-success pull-left" name="submit"><span class="glyphicon glyphicon-bitcoin"></span> Submit Payment</button>
                    </form>
                </p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
    <script>
        $('#paypal_form').attr('action', '<?php echo base_url(); ?>assets/payments/payments.php');
    </script>
</html>
