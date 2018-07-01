
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>เพิ่มข้อมูลสมาชิก</span>
          </strong>
        </div>
        <div class="panel-body">
                <?php echo form_open('Member/validate'); ?> 
    <form>   
      <div class="form-group"> Username : 
      <input class="form-control" type="text" name="UserName" required="" />
    </div>

     <div class="form-group"> Password : 
      <input class="form-control" type="text" name="Password" required="" />
    </div>

    <div class="form-group"> ยืนยัน Password : 
      <input class="form-control" type="text" name="RePassword" required="" />
    </div>

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
        <textarea class="form-control" type="Address" name="Address"> </textarea> 
</div>

<div class="form-group">
       เบอร์โทร : 
        <input class="form-control" type="text" name="Phone" value="" OnKeyPress="return chkNumber(this)" maxlength="10" />
</div>

<div class="form-group">
        E-Mail : 
        <input class="form-control" type="Email" name="Email" maxlength="50" />
</div>

<div class="form-group">
        ระดับสมาชิก : 
         <select class="form-control" name ="MemPos">
          <option value="0 ">สมาชิกทั่วไป</option>
          <option value="1">สมาชิกพรีเมี่ยม</option>
      </select>
</div>
 <!--  <tr>
         สถานะการใช้งาน : </td>
          <select name ="OnlineStatus">
          <option value="0 ">ใช้งาน</option>
          <option value="1">ไม่ใช้งาน</option>
      </select></td>
  </tr> -->  
          <input type="submit" colspan="1" class="btn btn-info   pull-right" value="ยืนยัน"/></td>
</form>
      </div>
    </div><!-- /.content -->

