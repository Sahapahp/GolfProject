
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>แก้ไขข้อมูลสมาชิก</span>
          </strong>
        </div>
        <div class="panel-body">
          <?php
    $id = $_GET['id']; 
    ?>
                <?php echo form_open('Member/update'); ?>
          
         <div class="form-group"> 
             ID :   
             <input class="form-control" type="text" name="id" required="" value=<?php echo $id; ?>  readonly />          
    </div> 
          
          <div class="form-group">
           UserName :       
           <input class="form-control" type="text" name="username" required="" maxlength="50"  /> 
          </div>   
       
       <div class="form-group">
           PassWord :   
        <input class="form-control" type="text" name="password" required="" maxlength="50"  /> 
          </div>

       <div class="form-group">
       ชื่อ :     
   <input class="form-control" type="text" name="FName" required="" maxlength="50"  /> 
          </div>
   
   <div class="form-group">
      นามสกุล :   
  <input class="form-control" type="text" name="LName" required="" maxlength="50"  /> 
          </div>
  
  <div class="form-group">
  ที่อยู่ :   
  <input class="form-control" type="textarea" name="Address" required="" maxlength="50"  /> 
          </div>  

  <div class="form-group">
  เบอร์โทร :   
<input class="form-control" type="text" name="Phone" value="" OnKeyPress="return chkNumber(this)" maxlength="10"  /> 
          </div> 
  <div class="form-group">
  E-Mail :   
  <input class="form-control" type="email" name="Email" required="" maxlength="50"> 
    </div> 

  <div class="form-group">
          ระดับสมาชิก :   
           <select class="form-control" name ="MemPos">
          <option value="0 ">สมาชิกทั่วไป</option>
          <option value="1">สมาชิกพรีเมี่ยม</option>
      </select>  </div> 
    
   <div class="form-group">
          สถานะการใช้งาน :   
           <select  class="form-control" name ="OnlineStatus">
          <option value="0 ">ใช้งาน</option>
          <option value="1">ไม่ใช้งาน</option>
      </select>  </div> 
     
         <input  type="submit" colspan="1" class="btn btn-info  pull-right" value="ยืนยัน"/> 
       
 
</form>
      </div>

    </div><!-- /.content -->
