
    <?php
    $id = $_GET['id']; 
    ?>
    <?php echo form_open('Employee/updateEmp'); ?> </h1>

    <script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>พนักงาน</span>
       </strong>
         <a href="#" class="btn btn-info pull-right">เปลี่ยนรหัสผ่าน</a>
      </div>
     <div class="panel-body">

         <form>
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
      ตำแหน่ง :   
       <select class="form-control" name ="Position">
      <!-- <option value="0 ">พนักงาน</option> -->
      <option value="1">แคดดี้</option>
  </select>  </div> 
  
  <div class="form-group">
      สถานะการใช้งาน :   
       <select class="form-control" name ="OnlineStatus">
      <option value="0 ">ใช้งาน</option>
      <option value="1">ไม่ใช้งาน</option>
  </select>  </div> 
  
  
<input  type="submit" colspan="1" class="btn btn-info  pull-right" value="ยืนยัน"/> 
  

</form>
     </div>
        </div>


<script>
        getEmp();
        function getEmp() {
            $.ajax({
                url: "<?php echo base_url() ?>Employee/getEmp",
                type: "POST",
                data: {id: '<?php echo $id; ?>'}
            }).done(function (data) {
                dataJson = JSON.parse(data);
                console.log(dataJson);
                $('input[name="username"]').val(dataJson[0].UserName);
                $('input[name="password"]').val(dataJson[0].Password);
                $('input[name="FName"]').val(dataJson[0].FName);
                $('input[name="LName"]').val(dataJson[0].LName);
                $('input[name="Address"]').val(dataJson[0].Address);
                $('input[name="Phone"]').val(dataJson[0].Phone);
                $('input[name="Email"]').val(dataJson[0].Email);
                $('input[name="Position"]').val(dataJson[0].Position);
                $('input[name="OnlineStatus"]').val(dataJson[0].OnlineStatus);
                
                
            });
        }
    </script>
