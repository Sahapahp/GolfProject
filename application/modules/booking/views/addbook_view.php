
<?php
date_default_timezone_set("Asia/Bangkok");
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$session_data = $this->session->logged_in;
?>
<?php echo form_open('Booking/validate'); ?>
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>เพิ่มรายการจอง</span>
        </strong>
    </div>
    <div class="panel-body">
        <div class="post"> 
            <form id="formBooking">
                <input class="form-control" id="id" type="text" name="id" style="display: none">
                <div class="form-group" id="divFname">
                    <label>ชื่อ :</label>
                    <input class="form-control" value="<?php if ($session_data->work == 3) echo $session_data->FName; ?>" id="fname" type="text" name="fname" required>
                </div>

                <div class="form-group" id="divLname">
                    <label>สกุล :</label>
                    <input class="form-control" value="<?php if ($session_data->work == 3) echo $session_data->LName; ?>" id="lname" type="text" name="lname" required>
                </div>

                <div class="form-group" id="divPhone">
                    <label>เบอร์โทร :</label>
                    <input class="form-control" id="Phone" value="<?php if ($session_data->work == 3) echo $session_data->Phone; ?>" type="text" name="Phone" required>
                </div>

                <div class="form-group">
                    <label>วัน :</label>
                    <input class="form-control" onchange="checkBook()" id="datePlay" type="date" name="DayBook" min="<?php echo date("Y-m-d"); ?>" required>
                </div>

                <div class="form-group" id="divHole">
                    <label>เลือกจำนวนหลุม:</label>
                    <input id="hole9" type="radio" name="Hole"  value="9" checked>9 หลุม
                    <input id="hole18" type="radio" name="Hole" value="18">18 หลุม 
                    <?php if ($session_data->work == 3) { ?>
                        <?php if ($session_data->MemPos == 1) { ?>
                            <input id="AllDay" type="radio" name="Hole" value="1">เหมาทั้งวัน 
                            <?php
                        }
                    }
                    ?>
                </div>

                <div class="form-group">
                    <label >เวลา:</label>
                    <select class="form-control" onchange="checkBook()" id="timeplay" name="Timebook" class="selectpicker" required>
                        <option value="4" selected >17.00-19.00</option>
                    </select>
                </div>

                <div class="form-group" id="divCourse">
                    <label >Course :</label>
                    <select class="form-control" id="course" name="Course">
                        <option value="" selected>เลือก Course</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select> 
                </div>

                <div class="form-group" id="divPerson">
                    <label >จำนวนผู้เล่น :</label>
                    <select class="form-control" onchange="$('#calPrice').click()" id="person" name="Person" required>
                        <option value="">เลือกจำนวน ผู้เล่น</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>

                <div class="form-group" id='divCaddy'>
                    <label>จำนวนแคดดี้:</label>
                    <select class="form-control" onchange="$('#calPrice').click()" id="caddyNum" name="CaddyNum" required>
                        <option value="">เลือกจำนวน แคดดี้</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>
                <div id="selectCaddy"></div>
                <div class="form-group" id="divCar">
                    <label>รถกอล์ฟ :</label>
                    <select class="form-control" onchange="$('#calPrice').click()" id="carNum" name="CarNum" required>
                        <option value="">เลือกจำนวน รถกอล์ฟ</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>

                <div class="form-group" id="divIns">
                    <label >ไม้กอล์ฟ :</label>
                    <select class="form-control" onchange="$('#calPrice').click()" id="InsNum" name="InsNum">
                        <option value="">เลือกจำนวน ไม้กอล์ฟ</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>
                <input class="form-control" type="text" class="" name="discount" id="discount" style="display: none">
                <div class="form-group">
                    <label >ราคารวม :</label>
                    <input  class="form-control" type="text" class="" name="sumTotal" id="sumTotal" readonly>
                </div>
                <?php
                $session_data = $this->session->logged_in;
                if ($session_data->work != 3) {
                    ?>
                    <div class="form-group">
                        <label>การชำระเงิน:</label>
                        <input id="pay1" type="radio" name="pay"  value="1" checked>ชำระแล้ว
                        <input id="pay0" type="radio" name="pay" value="0">ยังไม่ชำระ
                    </div>
                <?php } ?>
                <button id="calPrice" type="button" class="btn btn-info pull" style="display: none">คำนวณราคา</button>
                <button type="submit" id="btnCheckSubmit" class=" btn btn-info pull" style="display:none">ตกลง</button>
            </form>
            <p id="btnSubmit" class=" btn btn-info pull">ตกลง</p>
        </div>
    </div>
</div>
<div class="modal" id="modalComBooking" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">แสดงรายละเอียดค่าจอง</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
                        <b>#รหัสผู้จอง : <?php
                            $session_data = $this->session->logged_in;
                            if ($session_data->work == 2) {
                                echo $session_data->IdEmp;
                            } else {
                                echo $session_data->IdMem;
                            }
                            ?></b>
                        <table class="">
                            <tr>  
                                <td id="day" style="width: 150px;">วันที่เล่น</td>
                                <td id="time" style="width: 150px;">ช่วงเวลา</td>
                            </tr> 
                        </table>
                        <hr>
                        <div  style="width: 500px;">จำนวนผู้เล่น :  <span id="personModal">...</span><span class="pull-right" id="totalperson">...</span></div>
                        <div style="width: 500px;">จำนวนแคดดี้ :  <span id="caddyModal">...</span><span class="pull-right" id="totalcaddy">...</span></div>
                        <div style="width: 500px;">จำนวนชุดไม้กอล์ฟ :  <span id="insModal">...</span><span class="pull-right" id="totalins">...</span></div>
                        <div style="width: 500px;">จำนวนรถกอล์ฟ :  <span id="carModal">...</span><span class="pull-right" id="totalcar">...</span></div>
                        <div style="width: 500px;">ส่วนลด :  <span id="discountModal" class="pull-right">...</span></div>
                        <b><div style="width: 500px;">รวมเป็นเงิน :  <span id="totalModal" class="pull-right">...</span></div></b>
                    </div>
      </div>
      <div class="modal-footer">
          <button type="button" id="comfirmBooking" class="btn btn-success">ตกลง</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">

$(function() {
   $("#btnSubmit").click(function(){
      $('#modalComBooking').modal('show');
   });
});

$(function() {
   $("#comfirmBooking").click(function(){
      $('#btnCheckSubmit').click();
   });
});


                        $('#hole9').click(function (event) {
                            $('#divCourse').attr('style', '');
                            $('#course').attr('required', true);
                            var datePlay = $('#datePlay').val();
                            var timeH = '<?php echo date('H') ?>';
                            if (datePlay == "<?php echo date("Y-m-d"); ?>") {
                                if (timeH <= 15) {
                                    str = '<option value="4">17.00-19.00</option>';
                                } else {
                                    alert('หมดเวลาการจองสนาม กรุณาเลือกวันถัดไป');
                                    str = '<option value="">หมดเวลาการจองสนาม</option>';
                                }
                            } else {
                                str = '<option value="4">17.00-19.00</option>';
                            }
                            $("#timeplay").children().remove().end().append(str);
                            $("#timeplay").children().remove().end().append(str);
                            checkBook();
                        });
                        $('#hole18').click(function (event) {
                            str = '<option value="1">06.00-11.30</option>' +
                                    '<option value="2">11.30-15.00</option>' +
                                    '<option value="3">15.00-19.00</option>';
                            $("#timeplay").children().remove().end().append(str);
                            $('#course').val('');
                            $('#divCourse').attr('style', 'display:none');
                            $('#course').attr('required', false);

                            var datePlay = $('#datePlay').val();
                            var timeH = '<?php echo date('H') ?>';
                            if (datePlay == "<?php echo date("Y-m-d"); ?>") {
                                if (timeH <= 4) {
                                    str = '<option value="1">06.00-11.30</option>' +
                                            '<option value="2">11.30-15.00</option>' +
                                            '<option value="3">15.00-19.00</option>' +
                                            '<option value="4">17.00-19.00</option>';
                                } else if (timeH <= 9) {
                                    str = '<option value="2">11.30-15.00</option>' +
                                            '<option value="3">15.00-19.00</option>' +
                                            '<option value="4">17.00-19.00</option>';
                                } else if (timeH <= 13) {
                                    str = '<option value="3">15.00-19.00</option>' +
                                            '<option value="4">17.00-19.00</option>';
                                } else if (timeH <= 15) {
                                    str = '<option value="4">17.00-19.00</option>';
                                } else {
                                    alert('หมดเวลาการจองสนาม กรุณาเลือกวันถัดไป');
                                    str = '<option value="">หมดเวลาการจองสนาม</option>';
                                }
                                $("#timeplay").children().remove().end().append(str);
                            } else {
                                str = '<option value="1">06.00-11.30</option>' +
                                        '<option value="2">11.30-15.00</option>' +
                                        '<option value="3">15.00-19.00</option>' +
                                        '<option value="4">17.00-19.00</option>';
                            }

                            checkBook();
                        });

                        $('#course').change(function (event) {
                            checkCourse();
                        });
                        $('#AllDay').click(function (event) {
                            str = '<option value="5" selected>All day</option>';
                            $("#timeplay").children().remove().end().append(str);

                            $('#course').val('');
                            $('#divCourse').attr('style', 'display:none');
                            $('#course').attr('required', false);

                            $('#person').val('');
                            $('#divPerson').attr('style', 'display:none');
                            $('#person').attr('required', false);

//                            $('#caddyNum').val('');
//                            $('#divCaddy').attr('style', 'display:none');
//                            $('#caddyNum').attr('required', false);
//                            
//                            $('#InsNum').val('');
//                            $('#divIns').attr('style', 'display:none');
//                            $('#InsNum').attr('required', false);

                            checkBook();
                        });
                        $('#caddyNum').change(function (event) {
                            selectCaddy($('#caddyNum').val());
                        });
                        $('#datePlay').change(function (event) {
                            $('#hole9').click();

                        });
                        getPriceTime();
                        getPriceItem();
                        getDiscount();
                        var PriceTime;
                        var PriceItem;
                        var Promotion;
                        id = '<?php echo $id; ?>';
                        if (id) {
                            $.ajax({
                                url: "<?php echo base_url() ?>Booking/get_Booking",
                                type: "POST",
                                data: {id: id}
                            }).done(function (data) {
                                var json = JSON.parse(data);
                                console.log(json);
                                if (json[0].Hole == 9) {
                                    $('#hole9').attr('checked', 'checked');
                                    $('#hole9').click();
                                } else {
                                    $('#hole18').attr('checked', 'checked');
                                    $('#hole18').click();
                                    $('#Course').attr('style', 'display:none');
                                }
                                $('#id').val(json[0].IdBooking);
                                $('input[name="DayBook"]').val(json[0].DayBook);
                                $('select[name="Course"]').val(json[0].Course);
                                $('select[name="Person"]').val(json[0].Person);
                                $('select[name="CaddyNum"]').val(json[0].CaddyNum);
                                $('select[name="CarNum"]').val(json[0].CarNum);
                                $('select[name="InsNum"]').val(json[0].InsNum);
                                $('input[name="fname"]').val(json[0].fname);
                                $('input[name="lname"]').val(json[0].lname);
                                $('input[name="Phone"]').val(json[0].Phone);
                                $('input[name="sumTotal"]').val(json[0].sumtotal);

//$('#divCaddy').attr('style','display:none');
                                $('#divFname').attr('style', 'display:none');
                                $('#divLname').attr('style', 'display:none');
                                $('#divPhone').attr('style', 'display:none');
                                $('#divHole').attr('style', 'display:none');
                                $('#divCaddy').attr('style', 'display:none');
                                $('#divCar').attr('style', 'display:none');
                                $('#divIns').attr('style', 'display:none');
                                if (json[0].Hole == 18) {
                                    $('#divCourse').attr('style', 'display:none');
                                }
                            });
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
                        function getDiscount() {
                            $.ajax({
                                url: "<?php echo base_url() ?>Promotion/getPromotionNow",
                                type: "POST"
                            }).done(function (data) {
                                var json = JSON.parse(data);
                                console.log(json);
                                Promotion = json;
                            });
                        }


                        $('#calPrice').click(function (event) {
                            hole = $('input[name=Hole]:checked').val();
                            var datePlay = $('#datePlay').val();
                            var timeplay = $('#timeplay').val();
                            var course = $('#course').val();
                            var person = $('#person').val();
                            var caddyNum = $('#caddyNum').val();
                            var carNum = $('#carNum').val();
                            var InsNum = $('#InsNum').val();
                            var MemPos = '<?php
                if ($session_data->work == 3) {
                    echo $session_data->MemPos;
                } else {
                    echo "0";
                }
                ?>';
                        if(hole == 1){
                                    $('#personModal').html("เหมารวม");
                                }else{
                                    $('#personModal').html(person + " คน");
                                }
                                
                                $('#caddyModal').html(caddyNum + " คน");
                                $('#insModal').html(InsNum + " ชุด");
                                $('#carModal').html(carNum + " คัน");
                                
                                 if (timeplay == 1) {
                                    time = "06.00-11.30";
                                } else if (timeplay == 2) {
                                    time = "11.30-15.00";
                                } else if (timeplay == 3) {
                                    time = "15.00-19.00";
                                } else if (timeplay == 4){
                                    time = "17.00-19.00";
                                }else {
                                    time = 'เหมาทั้งวัน';
                                }
                                $('#time').html('ช่วงเวลา : ' + time);
                                $('#day').html('วันที่เล่น : ' + datePlay);
                            var discount = 0;
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
                                alert('date error!!!');
                            }
                            console.log(bookDay);
                            if (timeplay == 1) {
                                time = '06.00-11.30';
                            } else if (timeplay == 2) {
                                time = '11.30-15.00';
                            } else if (timeplay == 3) {
                                time = '15.00-19.00';
                            } else {
                                time = '17.00-19.00';
                            }
                            if (Promotion.length > 0) {
                                discount = Promotion[0].DisPrice;
                            }
                            newData = getObjectByValue(PriceTime, 'time_play', time);
                            console.log(newData);
                            newData = getObjectByValue(newData, 'day_play', bookDay);
                            console.log(newData);
                            var sum = 0;
                            if (timeplay == 5) {
                                sum = parseFloat(PriceItem[0].priceAllDay) + parseFloat(caddyNum * PriceItem[0].priceCaddy) + parseFloat(carNum * PriceItem[0].priceCar) + parseFloat(InsNum * PriceItem[0].priceIns);
                            } else {
                                sum = parseFloat(person * newData[0].price) + parseFloat(caddyNum * PriceItem[0].priceCaddy) + parseFloat(carNum * PriceItem[0].priceCar) + parseFloat(InsNum * PriceItem[0].priceIns);
                            }
                            if (MemPos == '1') {
                                discount = discount + PriceItem[0].pre_discount;
                            }
                            console.log(discount);
                            $('#discount').val(discount);
                            sum = sum - discount;
                            $('#sumTotal').val(sum);
                            
                             
                             $('#totalcaddy').html(parseFloat(caddyNum * PriceItem[0].priceCaddy) + " บาท");
                             $('#discountModal').html('-'+discount + " บาท");
                             $('#totalins').html(parseFloat(carNum * PriceItem[0].priceCar)+ " บาท");
                             $('#totalcar').html(parseFloat(InsNum * PriceItem[0].priceIns) + " บาท");
                             if(hole == 1){
                                    $('#totalperson').html(PriceItem[0].priceAllDay + " บาท");
                                }else{
                                    $('#totalperson').html(parseFloat(person * newData[0].price) + " บาท");
                                }
                                
                                $('#totalModal').html(sum + " บาท");
                        });

                        function selectCaddy(loop) {
                            day = $('#datePlay').val();
                            $.ajax({
                                url: "<?php echo base_url() ?>Employee/list_Caddy",
                                type: "POST",
                                data: {day: day}
                            }).done(function (data) {
                                var json = JSON.parse(data);
                                console.log(json);
                                var opts = "";
                                for (j = 0; j < loop; j++) {
                                    opts += '<select class="form-control caddy" onchange="removeOption(this)" id="selectCaddy' + (j + 1) + '" name="selectCaddy' + (j + 1) + '">';
                                    opts += '<option value="">เลือกแคดดี้</option>';
                                    for (var i = 0; i < json.length; i++) {
                                        opts += "<option value='" + json[i].IdEmp + "'>" + json[i].FName + " " + json[i].LName + "</option>";
                                    }
                                    opts += '</select>';
                                }
                                $("#selectCaddy").html(opts + '<br>');
//            $("#selectCaddy").children().remove().end().append(opts);
                            });
                        }

                        function removeOption(emp) {
                            str = "<option value='" + emp.value + "' selected>" + $('#' + emp.id).find("option:selected").text() + "</option>";
                            $(".caddy option[value='" + emp.value + "']").remove();
                            $("#" + emp.id).children().end().append(str);
                        }

                        function checkBook() {
                            datePlay = $('#datePlay').val();
                            timeplay = $('#timeplay').val();
                            hole = $('input[name=Hole]:checked').val();
                            course = $('#course').val();

//                            if ($('input[name=Hole]:checked').val() == 9) {
//                                leng = 4;
//                            } else if ($('input[name=Hole]:checked').val() == 18) {
//                                leng = 18;
//                            } else {
//                                leng = 1;
//                            }

                            $.ajax({
                                url: "<?php echo base_url() ?>Booking/check_Booking",
                                type: "POST",
                                data: {datePlay: datePlay, timeplay: timeplay, hole: hole, course: course}
                            }).done(function (data) {
                                var json = JSON.parse(data);
                                console.log(json);
                                if (json[0].length > 0) {
                                    alert("สนามกอล์ฟไม่ว่าง กรุณาเลือกวัน เวลา หรือ course(9 หลุม) ใหม่");
                                    $('#btnSubmit').attr('disabled', true);
                                    return;
                                } else {

                                    $('#btnSubmit').attr('disabled', false);

                                }
                                if (json[1].length >= 18) {
                                    alert("สนามกอล์ฟไม่ว่าง กรุณาเลือกวัน เวลา หรือ course(9 หลุม) ใหม่");
                                    $('#btnSubmit').attr('disabled', true);
                                } else {
                                    for (i = 0; i < json[1].length; i++) {
                                        if (json[1][0].Hole == 1 || $('input[name=Hole]:checked').val() == 1) {
                                            alert("สนามกอล์ฟไม่ว่าง กรุณาเลือกวัน เวลา หรือ course(9 หลุม) ใหม่");
                                            $('#btnSubmit').attr('disabled', true);
                                            return;
                                        }else{
                                           $('#btnSubmit').attr('disabled', false); 
                                        }
                                    }
                                    

                                }
                            });
//                            $.ajax({
//                                url: "<?php echo base_url() ?>Booking/count_Booking",
//                                type: "POST",
//                                data: {datePlay: datePlay, timeplay: timeplay, hole: hole, course: course}
//                            }).done(function (data) {
//                                var json = JSON.parse(data);
//                                console.log(json);
//                                if (json.length >= 18) {
//                                    alert("สนามกอล์ฟไม่ว่าง กรุณาเลือกวัน เวลา หรือ course(9 หลุม) ใหม่");
//                                    $('#btnSubmit').attr('disabled', true);
//                                } else {
//                                    for (i = 0; i < json.length; i++) {
//                                        if (json[0].Hole == 1 || $('input[name=Hole]:checked').val() == 1) {
//                                            alert("สนามกอล์ฟไม่ว่าง กรุณาเลือกวัน เวลา หรือ course(9 หลุม) ใหม่");
//                                            $('#btnSubmit').attr('disabled', true);
//                                            return;
//                                        }else{
//                                           $('#btnSubmit').attr('disabled', false); 
//                                        }
//                                    }
//                                    
//
//                                }
//                            });
                        }
                        function checkCourse() {
                            datePlay = $('#datePlay').val();
                            timeplay = $('#timeplay').val();
                            hole = $('input[name=Hole]:checked').val();
                            course = $('#course').val();

                            $.ajax({
                                url: "<?php echo base_url() ?>Booking/check_course",
                                type: "POST",
                                data: {datePlay: datePlay, timeplay: timeplay, hole: hole, course: course}
                            }).done(function (data) {
                                var json = JSON.parse(data);
                                console.log(json);
                                if (json.length) {
                                    alert("สนามกอล์ฟไม่ว่าง กรุณาเลือกวัน เวลา หรือ course(9 หลุม) ใหม่");
                                    $('#btnSubmit').attr('disabled', true);
                                } else {
                                    $('#btnSubmit').attr('disabled', false);
                                    checkBook();
                                }
                            });
                        }
                        var getObjectByValue = function (array, key, value) {
                            return array.filter(function (object) {
                                return object[key] === value;
                            });
                        };

</script>
