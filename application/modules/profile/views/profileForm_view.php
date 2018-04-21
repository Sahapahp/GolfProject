<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>เพิ่มข้อมูลสมาชิก</span>
        </strong>
    </div>
    <div class="panel-body">
        <?php
        $id = "";
        $session_data = $this->session->logged_in;
//    echo $session_data->work;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        ?>
        <?php echo form_open('profile/formSubmit'); ?> 
        <form>   

            <input class="form-control" type="text" name="id" style="display: none"/>
            <div class="form-group"> ชื่อ : 
                <input class="form-control" type="text" name="FName" required="" />
            </div>

            <div class="form-group">
                นามสกุล : 
                <input class="form-control" type="text" name="LName" required="" />
            </div>

            <div class="form-group">
                วันเกิด
                <input class="form-control" type="date" name="Birthday"> 
            </div>

            <div class="form-group"> 
                หมายเลขบัตรประจำตัวประชาชน
                <input class="form-control" type="text" name="IdCard" required="" maxlength="13" value="" OnKeyPress="return chkNumber(this)"> 
            </div>

            <div class="form-group">
                ที่อยู่ : 
                <textarea class="form-control" name="Address"> </textarea> 
            </div>

            <div class="form-group">
                เบอร์โทร : 
                <input class="form-control" type="text" name="Phone" value="" OnKeyPress="return chkNumber(this)" maxlength="10" />
            </div>
            <hr>
            <div class="form-group"> Password : 
                <input class="form-control" type="text" name="Password"/>
            </div>

            <div class="form-group"> ยืนยัน Password : 
                <input class="form-control" type="text" name="RePassword"/>
            </div>
            <input id="submit" type="submit" colspan="1" class="btn btn-info pull-right" value="ยืนยัน"/></td>
        </form>
    </div>
</div><!-- /.content -->
<script>
    getProfile();
    $('input[name="Password"]').change(function () {
        $('#submit').attr('disabled',true);
    });
    $('input[name="RePassword"]').change(function () {
        if($('input[name="Password"]').val() == $('input[name="RePassword"]').val()){
            $('#submit').attr('disabled',false);
        }else{
            $('#submit').attr('disabled',true); 
        }
    });
    function getProfile() {
        id = '<?php echo $id; ?>';
        if (id) {
            $.ajax({
                url: "<?php echo base_url() ?>Profile/getProfile",
                type: "POST",
                data: {id: '<?php echo $id; ?>', work: '<?php echo $session_data->work; ?>'}
            }).done(function (data) {
                dataJson = JSON.parse(data);
                console.log(dataJson);
                $('input[name="id"]').val(<?php echo $id; ?>);
                $('input[name="FName"]').val(dataJson[0].FName);
                $('input[name="LName"]').val(dataJson[0].LName);
                $('input[name="Birthday"]').val(dataJson[0].Birthday);
                $('input[name="IdCard"]').val(dataJson[0].IdCard);
                $('textarea[name="Address"]').text(dataJson[0].Address);
                $('input[name="Phone"]').val(dataJson[0].Phone);
            });
        }
    }
</script>