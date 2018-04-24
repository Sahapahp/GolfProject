<!DOCTYPE html >
<html ><head>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/images/PixelGreen.css" type="text/css" /><title>Rachet Golf</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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

    <?php if ($this->session->flashdata('done')): ?>
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
                        <li><a href="<?php echo base_url(); ?>" >หน้าแรก</a></li>
                        <li><a href="<?php echo base_url(); ?>Booking/callbookForm" id="current">จอง</a></li>
                        <li><a href="<?php echo base_url(); ?>Regis/callformregis">สมัครสมาชิก</a></li>
                        <li><a href="<?php echo base_url(); ?>Login/loginAll">เข้าสู่ระบบ</a></li>
                        <li><a href="index.html">ติดต่อ</a></li>
                    </ul>
                </div>
            </div>

            <div  class="text-left">

                <?php echo form_open('Booking/validate'); ?>
                <div class="panel panel-default" style="width: 700px; padding: auto; margin: auto;">
                    <div class="panel-heading clearfix">
                        <strong>
                            <span class="glyphicon glyphicon-th"></span>
                            <span>เพิ่มรายการจอง</span>
                        </strong>
                    </div>
                    <div class="panel-body">

                        <div class="post"> <a name="TemplateInfo"></a>

                            <form >

                                <div class="form-group">
                                    <label class="left">ชื่อ :</label>
                                    <input class="form-control" id="fname" type="text" name="fname" required>
                                </div>

                                <div class="form-group">
                                    <label>สกุล :</label>
                                    <input class="form-control" id="lname" type="text" name="lname" required>
                                </div>

                                <div class="form-group">
                                    <label>เบอร์โทร :</label>
                                    <input class="form-control" id="Phone" type="text" name="Phone" required>
                                </div>

                                <div class="form-group">
                                    <label>วัน :</label>
                                    <input class="form-control" id="datePlay" type="date" name="DayBook" required>
                                </div>

                                <div class="form-group">
                                    <label>เลือกจำนวนหลุม:</label>
                                    <input id="hole9" type="radio" name="Hole"  value="9" checked>9 หลุม
                                    <input id="hole18" type="radio" name="Hole" value="18">18 หลุม 
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
                                    <input  class="form-control" type="text" class="" name="sumTotal" id="sumTotal" readonly>
                                </div>
                                <button id="calPrice" type="button" class="btn btn-info pull" />คำนวณราคา</button>
                                <button type="submit" class=" btn btn-info pull">ตกลง</button>


                            </form>
                        </div>
                    </div>
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
            </div>
            <div style="font-size: 0.8em; text-align: center; margin-top: 1em; margin-bottom: 1em;">
            </div>

            
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script type="text/javascript">

                $('#hole9').click(function (event) {
                    str = '<option value="1">17.00-19.00</option>';
                    $("#timeplay").children().remove().end().append(str);
                });
                $('#hole18').click(function (event) {
                    str = '<option value="1">06.00-11.30</option>' +
                            '<option value="2">11.30-15.00</option>' +
                            '<option value="3">15.00-19.00</option>' +
                            '<option value="4">17.00-19.00</option>';
                    $("#timeplay").children().remove().end().append(str);
                });
                getPriceTime();
                getPriceItem();
                var PriceTime;
                var PriceItem;
                function getPriceTime() {
                    $.ajax({
                        url: "<?php echo base_url() ?>Employee/list_priceTime",
                        type: "POST"
                    }).done(function (data) {
                        var json = JSON.parse(data);
                        console.log(json);
                        PriceTime = json;
                    });
                }
                function getPriceItem() {
                    $.ajax({
                        url: "<?php echo base_url() ?>Employee/list_priceItem",
                        type: "POST"
                    }).done(function (data) {
                        var json = JSON.parse(data);
                        console.log(json);
                        PriceItem = json;
                    });
                }

                $('#calPrice').click(function (event) {
                    var datePlay = $('#datePlay').val();
                    var timeplay = $('#timeplay').val();
                    var course = $('#course').val();
                    var person = $('#person').val();
                    var caddyNum = $('#caddyNum').val();
                    var carNum = $('#carNum').val();
                    var InsNum = $('#InsNum').val();

                    var PricePerson = 0;
                    var PriceIns = 0;
                    var PriceCar = 0;
                    var PriceCaddy = 0;

                    ///หาวัน 0-6 0=อาทิตย์
                    var day = new Date(datePlay);
                    var bookDay = day.getDay();
                    if (bookDay == 1 || bookDay == 2 || bookDay == 4 || bookDay == 5) {
                        bookDay = 'จันทร์-อังคาร-พฤหัส-ศุกร์';
                    } else if (bookDay == 6 || bookDay == 0) {
                        bookDay = 'เสาร์-อาทิตย์';
                    } else if (bookDay == 3) {
                        bookDay = 'พุธ';
                    } else {
                        alert('กรุณาเลือกวันที่');
                    }
                    console.log(bookDay);
                    if ($('#timeplay').val() == 1) {
                        time = '06.00-11.30';
                    } else if ($('#timeplay').val() == 2) {
                        time = '11.30-15.00';
                    } else if ($('#timeplay').val() == 3) {
                        time = '15.00-19.00';
                    } else {
                        time = '17.00-19.00';
                    }

                    newData = getObjectByValue(PriceTime, 'time_play', time);
                    console.log(newData);
                    newData = getObjectByValue(newData, 'day_play', bookDay);
                    console.log(newData);

                    var sum = parseFloat(newData[0].price) + parseFloat(person * PriceItem[0].priceMember) + parseFloat(caddyNum * PriceItem[0].priceCaddy) + parseFloat(carNum * PriceItem[0].priceCar) + parseFloat(InsNum * PriceItem[0].priceIns);
                    $('#sumTotal').val(sum);
                });
                var getObjectByValue = function (array, key, value) {
                    return array.filter(function (object) {
                        return object[key] === value;
                    });
                };

            </script>
</html>