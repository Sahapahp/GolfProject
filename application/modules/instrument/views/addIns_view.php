
    	<div class="panel panel-default">
      <div class="panel-heading clearfix">
      	<span class="glyphicon glyphicon-th"></span>
          <span>เพิ่มอุปกรณ์</span>
      </div>
      <div class="panel-body">	
	<?php echo form_open('Instrument/validate'); ?>
	<form>
		 <div class="form-group">
			 ชื่ออุปกรณ์ :  
			 <input class="form-control" type="text" name="InsName" required="" />   
		 </div>
          <div class="form-group">
              เลือกชนิดอุปกรณ์ : 
              <select class="form-control" name ="typeIns">
                  <option value="0">ไม้กอล์ฟ</option>
                  <option value="1">รถกอล์ฟ</option>
              </select> 
          </div>
		 
			
			 <input colspan="2" type="submit" class="btn btn-info pull-right" value="ยืนยัน"/> 
		 
	
</form>
</div>
    </div><!-- /.content -->