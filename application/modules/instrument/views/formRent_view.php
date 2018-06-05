<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>เช่าอุปกรณ์</span>
        </strong>
    </div>
    <div class="panel-body">
        <?php echo form_open('Instrument/validate_rent'); ?>
        <form>
            <div class="form-group">
                เลือกการจอง : 
                <select class="form-control" name="booking" id="booking">
                    <option value="">เลือกการจอง</option>
                </select> 
            </div>
            <div class="form-group">
                จำนวนไม้กอล์ฟ : 
                <input type="text" class="form-control" id="instrument" name="instrument" readonly>
                <span id="setIns"></span>
            </div>
            
            <div class="form-group">
                จำนวนรถกอล์ฟ : 
                <input type="text" class="form-control" id="car" name="car" readonly>
                <span id="setCar"></span>
            </div>


            <input colspan="2" type="submit" class="btn btn-info pull-right" value="ยืนยัน"/> 


        </form>
    </div>
</div><!-- /.content -->

<script>
    $('#booking').change(function () {
        getBooking($('#booking').val());
    });
    selectBooking();
    listAccessories();
    var instrument;
    var car;
    function selectBooking() {
        $.ajax({
            url: "<?php echo base_url() ?>Booking/Booking_checkin",
            type: "POST"
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            var opts = '<option value="">เลือกการจอง</option>';
            for (var i = 0; i < json.length; i++) {
                opts += "<option value='" + json[i].IdBooking + "'>" + json[i].fname + " " + json[i].lname + "</option>";
            }
            $("#booking").children().remove().end().append(opts);
        });
    }

    function getBooking(id) {
        $.ajax({
            url: "<?php echo base_url() ?>Booking/get_Booking",
            type: "POST",
            data: {id: id}
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            $('#instrument').val(json[0].InsNum);
            opts1 = "";
            for (j = 0; j < json[0].InsNum; j++) {
                opts1 += '<select class="form-control ins" onchange="removeOptionIns(this)" id="selectIns'+(j+1)+'" name="selectIns'+(j+1)+'">';
                opts1 += '<option value="">เลือกชุดไม้กอล์ฟ</option>';
                for (var i = 0; i < instrument.length; i++) {
                    opts1 += "<option value='" + instrument[i].IdIns + "'>" + instrument[i].NameIns+"</option>";
                }
                opts1 += '</select>';
            }
            $("#setIns").html(opts1+'<br>');
            
            $('#car').val(json[0].CarNum);
            opts2 = "";
            for (j = 0; j < json[0].CarNum; j++) {
                opts2 += '<select class="form-control car" onchange="removeOptionCar(this)" id="selectCar'+(j+1)+'" name="selectCar'+(j+1)+'">';
                opts2 += '<option value="">เลือกรถ</option>';
                for (var i = 0; i < car.length; i++) {
                    opts2 += "<option value='" + car[i].IdIns + "'>" + car[i].NameIns+"</option>";
                }
                opts2 += '</select>';
            }
            $("#setCar").html(opts2+'<br>');
        });
    }
    
    function listAccessories() {
        $.ajax({
            url: "<?php echo base_url() ?>Instrument/listIns",
            type: "POST"
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            instrument = json
        });
        //
        $.ajax({
            url: "<?php echo base_url() ?>Instrument/listCar",
            type: "POST"
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            car = json;
        });
    }
    
    function removeOptionIns(ins) {
        str = "<option value='" + ins.value + "' selected>" + $('#' + ins.id).find("option:selected").text() + "</option>";
        $(".ins option[value='" + ins.value + "']").remove();
        $("#" + ins.id).children().end().append(str);
    }
    function removeOptionCar(car) {
        str = "<option value='" + car.value + "' selected>" + $('#' + car.id).find("option:selected").text() + "</option>";
        $(".caddy option[value='" + car.value + "']").remove();
        $("#" + car.id).children().end().append(str);
    }
</script>