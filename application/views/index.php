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
        </head>

        <?php if ($this->session->flashdata('done')): ?>
            <div>
                <div class="alert alert-success">
                <strong>Success!</strong> สมัครสมาชิกสำเร็จแล้ว
            </div> 
        </div>
    <?php endif; ?>

    <body >
        <!-- wrap starts here -->
        <div id="wrap">
            <div id="header">
                <div id="header-content">
                    <h1 id="logo"><a href="index.html" title="">Rachet Golf<span class="white">Club</span></a></h1>

                    <!-- Menu Tabs -->
                    <ul>
                        <li><a href="<?php echo base_url(); ?>" id="current">หน้าแรก</a></li>
                        <li><a href="<?php echo base_url(); ?>Booking/callbookForm">จอง</a></li>
                        <li><a href="<?php echo base_url(); ?>Regis/callformregis">สมัครสมาชิก</a></li>
                        <li><a href="<?php echo base_url(); ?>Login/loginAll">เข้าสู่ระบบ</a></li>
                        <li><a href="index.html">ติดต่อ</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active headerphoto">
                            <img src="<?php echo base_url(); ?>assets/images/hold1.1.jpg" style="width:100%;">
                        </div>

                        <div class="item headerphoto">
                            <img src="<?php echo base_url(); ?>assets/images/hold2.2.jpg" style="width:100%;">
                        </div>

                        <div class="item headerphoto">
                            <img src="<?php echo base_url(); ?>assets/images/hold3.3.jpg"  style="width:100%;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!-- content-wrap -->
            <div id="content-wrap" style="">
                <div id="content">
                    <div id="sidebar">
                        <div class="sidebox">
                            <h1><font color="green">โปรโมชั่น</font></h1>
                            <?php foreach ($promotion as $key): ?>
                                <p> <?php echo $key->namePro; ?></p>
                            <?php endforeach; ?>
                        </div>
                        <div class="sidebox">
                            <h1 class="clear"> <font color="green">เมนู</font></h1>
                            <ul class="sidemenu">
                                <li><a href="<?php echo base_url(); ?>" id="current" class="top">หน้าแรก</a></li>
                                <li><a href="<?php echo base_url(); ?>Login/loginAll">เข้าสู่ระบบ</a></li>
                                <li><a href="<?php echo base_url(); ?>Regis/callformregis">สมัครสมาชิก</a></li>
                                <li><a href="<?php echo base_url(); ?>booking/bookshowem">จอง</a></li>
                                <li><a href="<?php echo base_url(); ?>Regis/showimg">รูปภาพสนาม</a></li>
                                </li>
                            </ul>
                        </div>


                        <div class="sidebox">
                        </div>
                        <div class="sidebox">
                        </div>
                    </div>
                    <div id="main" style=" background-color: white">
                        <div class="post"> <a name="TemplateInfo"></a>
                            <h1><font color="green">ข้อมูลสนามกอล์ฟ</font></h1>
                            <p>หลุม : 18</p>
                            <p>พาร์ : 72</p>
                            <p>รายละเอียดสนาม : สนามกอล์ฟราเชษฐ์มีขนาด 18 หลุม  ตั้งอยู่ในสภาพแวดล้อมธรรมชาติ ที่โอบล้อมไปด้วยภูเขาพร้อมทัศนียภาพอันงดงามของอำเภอเพ็ญที่มีความเขียวขจีตลอดทั้งปี โดยมีระยะตั้งแต่ 4,875 หลา (สำหรับสุภาพสตรี) และ 7,115 หลา (สำหรับการแข่งขัน) รูปแบบซิงเกิล แทรค ทำให้นักกอล์ฟรู้สึกเสมือนได้เป็นผู้เล่นเพียงคนเดียวภายในสนาม เป็นประสบการณ์การเล่นกอล์ฟที่น่าจดจำอย่างแท้จริง

                                สนามกอล์ฟราเชษฐ์สามารถเดินทางมาได้ง่ายจากอุดรธานีเพื่อหลบหนีจากความแอดอัดของชีวิตในเมืองมาพบกับความสงบบนพื้นที่ที่มีความสง่างามเก๋ไก๋ของชีวิตร่วมสมัยซึ่งผสมผสานกันได้อย่างลงตัวกับความงดงามของธรรมชาติ</p>
                            <p>ปีที่ก่อตั้ง : 2015</p>
                            <p>ผู้ออกแบบ : นาย ราเชษฐ์ ญาติอภิรักษ์</p>
                            <p>เวลาเปิด : วันจันทร์ - วันอาทิตย์</p>

                            <p class="post-footer align-right"> 
                        </div>
                        <h3 style="padding: 10px; background-color: #FFF;">ข่าวสารการแข่งขัน</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <th class="first"><strong>post</strong>
                                        date</th>
                                    <th>รายการ</th>
                                    <th>วันแข่งขัน</th>
                                </tr>
                                <tr class="row-a">
                                    <td class="first">05.2.2018</td>
                                    <td>ราเชษฐ์คัพ</td>
                                    <td>11/2/2561...</a></td>
                                </tr>
                                <tr class="row-b">
                                    <td class="first">19.2.2018</td>
                                    <td>รายการแข่งขันการกุศล   </td>
                                    <td>29/3/2561</td>

                            </tbody>
                        </table>

                        <!-- footer  -->
                        <div id="footer" >
                            <div id="footer-content" >
                                <div style="padding: 10px;">
                                    <div class="col float-left">
                                        <h1 style="padding: 10px;">ติดต่อเรา</h1>
                                        <ul>
                                            <li><a href="http://www.dreamhost.com/r.cgi?287326"><strong>FaceBook</strong>
                                                    - Rachet Golf Club</a></li>
                                            <li><a href="http://www.4templates.com/?aff=ealigam"><strong>Instragram</strong>
                                                    - Rachet Golf Club</a></li>
                                            <li><p><strong>คุณราเชษฐ์ 09-10601197</strong>

                                        </ul>
                                    </div>

                                    <div class="col float-left">
                                        <h1 style="padding: 10px;">Links</h1>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>" id="current">หน้าแรก</a></li>
                                            <li><a href="<?php echo base_url(); ?>Regis/callformregis">สมัครสมาชิก</a></li>
                                            <li><a href="<?php echo base_url(); ?>booking/bookshowem">จอง</a></li>
                                            <li><a href="<?php echo base_url(); ?>Regis/showimg">รูปภาพสนาม</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col float-left" style="padding:10px;">
                                <p> © copyright 2017 <strong>Rachet Golf Club</strong></p>
                            </div>
                        </div>
                    </div>
                    <div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">
                    </div>
                </div>

            </div>
    </body></html>