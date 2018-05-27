
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>เพิ่มพนักงาน</span>
        </strong>
    </div>
    <div class="panel-body">

        <?php echo form_open('Employee/validateAdd'); ?>
        <form >
            <div class="form-group">   
                Username :  
                <input class="form-control" type="text" name="username" id="username" onkeyup="checkEmp()" required="" maxlength="20" />   
            </div> 

            <div class="form-group"> 
                Password :  
                <input class="form-control" type="password" name="password" required="" maxlength="20" /> 
            </div>
            <div class="form-group">
                ยืนยัน Password :  
                <input class="form-control" type="password" name=" repassword" required="" maxlength="20" /> 
            </div>
            <div class="form-group">
                ชื่อ :  
                <input class="form-control" type="text" name="FName" required=""  maxlength="50" />   
            </div>

            <div class="form-group">
                นามสกุล :  
                <input class="form-control" type="text" name="LName" required="" maxlength="50" /> 
            </div>



            <div class="form-group">
                วันเกิด
                <input class="form-control" type="date" name="birthday"> 
            </div>  
            <div class="form-group"> 
                หมายเลขบัตรประจำตัวประชาชน
                <input class="form-control" type="text" name="IdCard" required="" maxlength="13" value="" OnKeyPress="return chkNumber(this)"> 
            </div>

            <div class="form-group">
                ที่อยู่
                <textarea class="form-control" name="address" rows="5" cols="40" required="" ></textarea> 
            </div>  

            <div class="form-group"> 
                E-Mail
                <input class="form-control" type="email" name="email" required="" maxlength="50"> 
            </div>

            <div class="form-group">  
                เบอร์โทร
                <input class="form-control" type="text" name="phone" required="" maxlength="10" value="" OnKeyPress="return chkNumber(this)"> 
            </div>  

            <div class="form-group">
                ตำแหน่ง :  
                <select class="form-control" name ="Position">
                    <option value="0">พนักงาน</option>
                    <option value="1">แคดดี้</option>
                </select> 
            </div>

            <input  type="submit" colspan="1" class="btn btn-info  pull-right" id="formsubmit" value="ยืนยัน"/> 

        </form>
    </div>
</div><!-- /.content -->
<script>
    function checkEmp() {
        var username = $('#username').val();
        $.ajax({
            url: "<?php echo base_url() ?>Employee/getUserEmp",
            type: "POST",
            data:{username:username}
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            if(json.length>0){
                alert("ชื่อผู้ใช้นี้มีผู้ใช้อยู่แล้ว กรุณาใช่ชื่อผู้ใช้อื่น !!!");
                $('#formsubmit').attr('disabled',true);
            }else{
                $('#formsubmit').attr('disabled',false);
            }
        });
    }
</script>