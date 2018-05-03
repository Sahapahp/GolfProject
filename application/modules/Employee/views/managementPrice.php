<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>จัดการราคาค่าเช่าสนาม</span>
        </strong>

    </div>
    <div class="panel-body">
        <table class="table">
            <tr><th>วัน\เวลา</th><th>60.00-11.30</th><th>11.30-15.00</th><th>15.00-19.00</th><th>17.00-19.00</th></tr>
            <tr><th>จันทร์-อังคาร-พฤหัส-ศุกร์</th><td> <input id="1" type="number" class="form-control" style="width: 100px;"></td><td><input id="4" type="number" class="form-control" style="width: 100px;"></td><td><input id="7" type="number" class="form-control" style="width: 100px;"></td><td><input id="10" type="number" class="form-control" style="width: 100px;"></td></tr>
            <tr><th>พุธ</th><td>                 <input id="2" type="number" class="form-control" style="width: 100px;"></td><td><input id="5" type="number" class="form-control" style="width: 100px;"></td><td><input id="8" type="number" class="form-control" style="width: 100px;"></td><td><input id="11" type="number" class="form-control" style="width: 100px;"></td></tr>
            <tr><th>เสาร์-อาทิตย์</th><td>          <input id="3" type="number" class="form-control" style="width: 100px;"></td><td><input id="6" type="number" class="form-control" style="width: 100px;"></td><td><input id="9" type="number" class="form-control" style="width: 100px;"></td><td><input id="12" type="number" class="form-control" style="width: 100px;"></td></tr>
        </table>
    </div>
    <div class="panel-footer">
        <button id="btnTime" onclick="setPriceTime()" class="btn btn-info">บันทึก</button>
    </div>

</div><!-- /.content -->

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>จัดการอัตราค่าบริการ</span>
        </strong>

    </div>
    <div class="panel-body">
        <table class="table">
            <tr><th>ราคาเหมาทั้งวัน</th><th>ราคาแคดดี้/คน</th><th>ราคาไม้กอล์ฟ/ชุด</th><th>ราคารถกอล์ฟ/คัน</th></tr>
            <tr><td> <input id="A1" type="number" class="form-control" style="width: 100px;"></td><td><input id="A2" type="number" class="form-control" style="width: 100px;"></td><td><input id="A3" type="number" class="form-control" style="width: 100px;"></td><td><input id="A4" type="number" class="form-control" style="width: 100px;"></td></tr>
        </table>
    </div>
    <div class="panel-footer">
        <button id="btnItem" onclick="setPriceItem()" class="btn btn-info">บันทึก</button>
    </div>

</div><!-- /.content -->

<script>
    list_priceItem();
    list_priceTime();
    function list_priceItem() {
        $.ajax({
            url: "<?php echo base_url() ?>Employee/list_priceItem",
            type: "POST"
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            $('#A1').val(json[0].priceAllDay);
            $('#A2').val(json[0].priceCaddy);
            $('#A3').val(json[0].priceIns);
            $('#A4').val(json[0].priceCar);
        });
    }

    function list_priceTime() {
        $.ajax({
            url: "<?php echo base_url() ?>Employee/list_priceTime",
            type: "POST"
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            for (i = 0; i < json.length; i++) {
                $('#' + (i + 1) + '').val(json[i].price);
            }

        });
    }

    function setPriceTime() {
        var data = [];
        for (i = 0; i < 12; i++) {
            data.push($('#' + (i + 1) + '').val());
        }
        console.log(data);
        $.ajax({
            url: "<?php echo base_url() ?>Employee/setPriceTime",
            type: "POST",
            data:{A1:data[0],A2:data[1],A3:data[2],A4:data[3],A5:data[4],A6:data[5],A7:data[6],A8:data[7],A9:data[8],A10:data[9],A11:data[10],A12:data[11]}
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
        });
        
    }
    
    function setPriceItem() {
        var data = [];
        for (i = 0; i < 4; i++) {
            data.push($('#A' + (i + 1) + '').val());
        }
        console.log(data);
        $.ajax({
            url: "<?php echo base_url() ?>Employee/setPriceItem",
            type: "POST",
            data:{A1:data[0],A2:data[1],A3:data[2],A4:data[3]}
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
        });
        
    }
</script>