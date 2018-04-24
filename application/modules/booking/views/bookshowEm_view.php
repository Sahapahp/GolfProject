
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>รายการจอง</span>
       </strong>
         <a href="Booking/formaddbook" class="btn btn-info pull-right">สร้างรายการจองใหม่</a>
      </div>
     <div class="panel-body">

      <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ชื่อ-สกุล</th>
            <th class="text-center">หลุม</th>
            <th class="text-center">วัน</th>
            <th class="text-center">เวลา</th>
            <th class="text-center">การชำระ</th>
            <th class="text-center" style="width: 100px;">จัดการ</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ชื่อ-สกุล</th>
            <th class="text-center">หลุม</th>
            <th class="text-center">วัน</th>
            <th class="text-center">เวลา</th>
            <th class="text-center">การชำระ</th>
            <th class="text-center" style="width: 100px;">จัดการ</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
           <?php if ( isset($booking) && is_array($booking) ): ?>
			<?php foreach ( $booking as $key ): ?>

         <?php if ($key->Timebook==6) {
                  $key->Timebook="06.00 – 11.30";
                }else if ($key->Timebook==7) 
                {
                 $key->Timebook="11.30 – 15.00";
               }else if ($key->Timebook==8) {
                 $key->Timebook="15.00 – 19.00";
               }else  {
                 $key->Timebook="17.00 – 19.00";
               }
               ?>
         <!--  <?php if ($key->OnlineStatus==0) {
                  $key->OnlineStatus="ใช้งาน";
                }else{
                 $key->OnlineStatus="ไม่ใช้งาน";
               }?>  -->
               
               <?php if ($key->BookStatus==true) {
                  $key->BookStatus="ชำระแล้ว";
                }else{
                 $key->BookStatus="ยังไม่ชำระ";
               }?>

			<?php echo "<td class='text-center'>" .$key->IdBooking .
      "<td class='text-center'>".$key->fname  ." ".  $key->lname.
      "</td> <td class='text-center'>". $key->Hole ."</td> "; ?>
			<?php echo "<td class='text-center'>" .$key->DayBook .
      "</td> <td class='text-center'>". $key->Timebook ."</td>"; ?>
               <?php echo "<td class='text-center'>" .$key->BookStatus .
      "</td>"; ?>
       <td>
             <div class="btn-group text-center">
                <a href="Booking/formaddbook?id=<?php echo $key->IdBooking; ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
                  <i class="glyphicon glyphicon-pencil"></i>
               </a>
                <a href="booking/delete/?id=<?php echo $key->IdBooking; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
                  <i class="glyphicon glyphicon-remove"></i>
                </a>
                </div>
           </td>
    </tr>

			<?php endforeach; ?>
			<?php else: ?>
				ไม่มีข้อมูล
			<?php endif; ?>
          </tbody>
     </table>
     </div>

    </div><!-- /.content -->

 <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>







