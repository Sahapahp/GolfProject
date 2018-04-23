<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php echo form_open('Booking/validate'); ?>

        <div id="main" class="container">
            <div class="post"> <a name="TemplateInfo"></a>
                <h1>จอง</h1>
                <form action="/action_page.php" >

                    <div class="form-group">
                        <label>ชื่อ :</label>
                        <input id="fname" type="text" name="fname" required>
                    </div>

                    <div class="form-group">
                        <label>สกุล :</label>
                        <input id="lname" type="text" name="lname" required>
                    </div>

                    <div class="form-group">
                        <label>เบอร์โทร :</label>
                        <input id="Phone" type="text" name="Phone" required>
                    </div>

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
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
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
                    <button id="calPrice" type="button" class="btn btn-info pull" />คำนวณราคา</button>
                    <button type="submit" class=" btn btn-info pull">ตกลง</button>


                </form>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script type="text/javascript">
                
                    $('#hole9').click(function (event) {
                            str = '<option value="1">17.00-19.00</option>';
                            $("#timeplay").children().remove().end().append(str);

                    $('#hole18').click(function (event) {
                        str = '<option value="1">06.00-11.30</option>'+
                              '<option value="2">11.30-15.00</option>'+
                              '<option value="3">15.00-19.00</option>'+
                              '<option value="4">17.00-19.00</option>';
                            $("#timeplay").children().remove().end().append(str);
                    });

                    $('#calPrice').click(function (event) {
                        var datePlay = $('#datePlay').val();
                        var timeplay = $('#timeplay').val();
                        var course = $('#course').val();
                        var person = $('#person').val();
                        var caddyNum = $('#caddyNum').val();
                        var carNum = $('#carNum').val();
                        var InsNum = $('#InsNum').val();

//                        var PricePerson = '<?php echo $PricePerson ?>';
//                        var PriceIns = '<?php echo $PriceIns ?>';
//                        var PriceCar = '<?php echo $PriceCar ?>';
//                        var PriceCaddy = '<?php echo $PriceCaddy ?>';

                        ///หาวัน 0-6 0=อาทิตย์
                        var day = new Date(datePlay);
                        /*alert(day.getDay());*/

                        //9หลุม 17.00-19.00

                        if (day.getDay() == 0 && timeplay == 1)
                            var sum1 = 1000;

                        if (day.getDay() == 1 && timeplay == 1)
                            var sum1 = 800;

                        if (day.getDay() == 2 && timeplay == 1)
                            var sum1 = 800;

                        if (day.getDay() == 3 && timeplay == 1)
                            var sum1 = 600;

                        if (day.getDay() == 4 && timeplay == 1)
                            var sum1 = 800;

                        if (day.getDay() == 5 && timeplay == 1)
                            var sum1 = 800;

                        if (day.getDay() == 6 && timeplay == 1)
                            var sum1 = 1000;
                        /////////18หลุม 06-11.30

                        if (day.getDay() == 0 && timeplay == 2)
                            var sum1 = 1500;

                        if (day.getDay() == 1 && timeplay == 2)
                            var sum1 = 1300;

                        if (day.getDay() == 2 && timeplay == 2)
                            var sum1 = 1300;

                        if (day.getDay() == 3 && timeplay == 2)
                            var sum1 = 1000;

                        if (day.getDay() == 4 && timeplay == 2)
                            var sum1 = 1300;

                        if (day.getDay() == 5 && timeplay == 2)
                            var sum1 = 1300;

                        if (day.getDay() == 6 && timeplay == 2)
                            var sum1 = 1500;
                        ////////11.30-15.00

                        if (day.getDay() == 0 && timeplay == 3)
                            var sum1 = 1200;

                        if (day.getDay() == 1 && timeplay == 3)
                            var sum1 = 1000;

                        if (day.getDay() == 2 && timeplay == 3)
                            var sum1 = 1000;

                        if (day.getDay() == 3 && timeplay == 3)
                            var sum1 = 1000;

                        if (day.getDay() == 4 && timeplay == 3)
                            var sum1 = 1000;

                        if (day.getDay() == 5 && timeplay == 3)
                            var sum1 = 1000;

                        if (day.getDay() == 6 && timeplay == 3)
                            var sum1 = 1000;

                        if (day.getDay() == 0 && timeplay == 3)
                            var sum1 = 1200;

                        ////// 15.00-19.00

                        if (day.getDay() == 0 && timeplay == 4)
                            var sum1 = 1400;

                        if (day.getDay() == 1 && timeplay == 4)
                            var sum1 = 1200;

                        if (day.getDay() == 2 && timeplay == 4)
                            var sum1 = 1200;

                        if (day.getDay() == 3 && timeplay == 4)
                            var sum1 = 1000;

                        if (day.getDay() == 4 && timeplay == 4)
                            var sum1 = 1200;

                        if (day.getDay() == 5 && timeplay == 4)
                            var sum1 = 1200;

                        if (day.getDay() == 6 && timeplay == 4)
                            var sum1 = 1400;


                        var sum = (sum1 + (person * PricePerson) + (caddyNum * PriceCaddy) + (carNum * PriceCar) + (InsNum * PriceIns));

                        alert(sum);


                    });
                });


            </script>
    </body>
</html>