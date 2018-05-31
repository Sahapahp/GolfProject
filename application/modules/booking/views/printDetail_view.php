<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>รายงาน</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/css/main.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/DataTables-1.10.16/datatables.min.js" />-->
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/Loading/waitMe.css">
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
    <body style="">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
                $id = "";
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                ?>
                <div>
                    <h1>Rachet Golf Club</h1>
                    <h2>รายงานข้อมูลการจอง</h2><br>
                    <div>
                        <b>#รหัสผู้จอง : <?php
                            $session_data = $this->session->logged_in;
                            if ($session_data->work == 2) {
                                echo $session_data->IdEmp;
                            } else {
                                echo $session_data->IdMem;
                            }
                            ?></b>
                        <table class=""><tr>
                                <td id="name" style="width: 250px;">ชื่อ-สกุล</td>
                                <td id="phone" style="width: 250px;">เบอร์โทรศัพท์</td>
                            </tr>
                            <tr>  
                                <td id="day" style="width: 150px;">วันที่เล่น</td>
                                <td id="time" style="width: 150px;">ช่วงเวลา</td>
                            </tr> 
                        </table>
                        <hr>
                        <div  style="width: 500px;">จำนวนผู้เล่น :  <span id="person">...</span><span class="pull-right" id="totalperson">...</span></div>
                        <div style="width: 500px;">จำนวนแคดดี้ :  <span id="caddy">...</span><span class="pull-right" id="totalcaddy">...</span></div>
                        <div style="width: 500px;">จำนวนชุดไม้กอล์ฟ :  <span id="ins">...</span><span class="pull-right" id="totalins">...</span></div>
                        <div style="width: 500px;">จำนวนรถกอล์ฟ :  <span id="car">...</span><span class="pull-right" id="totalcar">...</span></div>
                        <div style="width: 500px;">ส่วนลด :  <span id="discount" class="pull-right">...</span></div>
                        <b><div style="width: 500px;">รวมเป็นเงิน :  <span id="total" class="pull-right">...</span></div></b>
                    </div>
                    <div id="listCaddy"> </div>
                    <hr>
                    <p>Rachet Golf Club : 09-10601197</p>
                </div>
                <div class="col-xs-12">
                    <button onclick="printDetail()" target="_blank" class="btn btn-default pull-left"><span class="glyphicon glyphicon-print"></span> Print</button>
                    <?php $session_data = $this->session->logged_in;
                            if ($session_data->work == 3) {?>
                    <form class="paypal" action="" method="post" id="paypal_form" target="_blank">
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="no_note" value="1" />
                        <input type="hidden" name="lc" value="TH" />
                        <input type="hidden" name="currency_code" value="THB" />
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <input type="hidden" name="first_name" value="ราเชษฐ์" />
                        <input type="hidden" name="last_name" value="ญาติอภิรักาษ์" />
                        <input type="hidden" name="payer_email" value="Rachet_GolfClub@hotmail.com" />
                        <input type="hidden" name="item_number" id="item_number" value="" />
                        <input type="hidden" name="product_name" id="product_name" value="" />
                        <input type="hidden" name="statusPay" value="booking" />
                        <button type="submit" id="btnSubmit" class="btn btn-success pull-left" name="submit"><span class="glyphicon glyphicon-bitcoin"></span> Submit Payment</button>
                    </form>
                    <?php }?>
                    </button>
                </div>
            </div>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/js/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/Loading/waitMe.js"></script>
    <script>
                        var str = "";
                        var json;
                        var PriceTime;
                        var PriceItem;

                        $('body').waitMe({
                            effect: 'bounce',
                            text: '',
                            bg: 'white',
//                            color: #000,
                            maxSize: '',
                            waitTime: 2000,
                            textPos: 'vertical',
                            fontSize: '',
                            source: '',
                            onClose: function () {}
                        });
                        getPriceItem();
                        getPriceTime();
                        setTimeout(get_Booking, 1500);
                        function get_Booking() {
                            getCaddyBooking();
                            id = '<?php echo $id; ?>';
                            $.ajax({
                                url: "<?php echo base_url() ?>Booking/get_Booking",
                                type: "POST",
                                data: {id: id}
                            }).done(function (data) {
                                json = JSON.parse(data);
                                console.log(json);
                                $('#name').html('ชื่อ-สกุล : ' + json[0].fname + " " + json[0].lname);
                                $('#phone').html('เบอร์โทรศัพท์ : ' + json[0].Phone);
                                $('#day').html('วันที่เล่น : ' + json[0].DayBook);
                                $('#item_number').val('#' + id);
                                $('#paypal_form').attr('action', '<?php echo base_url(); ?>assets/payments/payments.php?price=' + json[0].sumtotal);
                                if (json[0].Timebook == 1) {
                                    time = "06.00-11.30";
                                } else if (json[0].Timebook == 2) {
                                    time = "11.30-15.00";
                                } else if (json[0].Timebook == 3) {
                                    time = "15.00-19.00";
                                } else {
                                    time = "17.00-19.00";
                                }
                                if(json[0].BookStatus ==1){
                                    $('#btnSubmit').attr('style','display:none');
                                }
                                $('#time').html('ช่วงเวลา : ' + time);
                                $('#item_number').val(json[0].IdBooking);
                                $('#product_name').val('ค่าเช่าสนามกอล์ฟ');
                                $('#person').html(json[0].Person + " คน");
                                $('#caddy').html(json[0].CaddyNum + " คน");
                                $('#ins').html(json[0].CarNum + " ชุด");
                                $('#car').html(json[0].InsNum + " คัน");

                                
                                $('#totalcaddy').html((json[0].CaddyNum * PriceItem[0].priceCaddy) + " บาท");
                                $('#discount').html('-'+json[0].discount + " บาท");
                                $('#totalins').html((json[0].CarNum * PriceItem[0].priceCar) + " บาท");
                                $('#totalcar').html((json[0].InsNum * PriceItem[0].priceIns) + " บาท");
                                ///หาวัน 0-6 0=อาทิตย์
                                var day = new Date(json[0].DayBook);
                                var bookDay = day.getDay();
                                if (bookDay == 1 || bookDay == 2 || bookDay == 4 || bookDay == 5) {
                                    bookDay = 'จันทร์-อังคาร-พฤหัส-ศุกร์';
                                } else if (bookDay == 6 || bookDay == 0) {
                                    bookDay = 'เสาร์-อาทิตย์';
                                } else if (bookDay == 3) {
                                    bookDay = 'พุธ';
                                } else {
                                    alert('date error!!!');
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

                                $('#totalperson').html((json[0].Person * newData[0].price) + " บาท");
                                $('#total').html(json[0].sumtotal + " บาท");
                            });
                        }
                        function getCaddyBooking() {
                            id = '<?php echo $id; ?>';
                            $.ajax({
                                url: "<?php echo base_url() ?>Booking/getCaddyBooking",
                                type: "POST",
                                data:{id:id}
                            }).done(function (data) {
                                var json = JSON.parse(data);
                                console.log(json);
                                var str = "<br><b>รายชื่อแคดดี้</b><br>";
                                for(i=0;i<json.length;i++){
                                    str += (i+1)+" "+json[i].FName+" "+json[i].LName+"<br>";
                                }
                                $('#listCaddy').html(str);
                            });
                        }
                        
                        function printDetail() {
                            window.print();
                        }

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

                        var getObjectByValue = function (array, key, value) {
                            return array.filter(function (object) {
                                return object[key] === value;
                            });
                        };
    </script>
</html>

</div><!-- /.content -->