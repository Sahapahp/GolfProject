



      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>สมาชิก</span>
          </strong>
          <a href="addAdMem" class="btn btn-info pull-right">สร้างสมาชิกใหม่</a>
        </div>
        <div class="panel-body">
<table id="example" class="display" cellspacing="0" width="100%">
            <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">ชื่อผู้ใช้</th>
              <th class="text-center">ชื่อ</th>
              <th class="text-center">นามสกุล</th>
              <th class="text-center">ตำแหน่ง</th>
              <th class="text-center">จัดการ</th>
            </tr>
          </thead>
           <tfoot>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">ชื่อผู้ใช้</th>
              <th class="text-center">ชื่อ</th>
              <th class="text-center">นามสกุล</th>
              <th class="text-center">ตำแหน่ง</th>
              <th class="text-center">จัดการ</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
             <?php if ( isset($member) && is_array($member) ): ?>

               <?php foreach ( $member as $key ): ?>

                 <?php if ($key->MemPos==0) {
                  $key->MemPos="สมาชิกทั่วไป";
                }else{
                 $key->MemPos="สมาชิกพรีเมี่ยม";
               }?>

               <?php echo "<td class='text-center'>" .$key->IdMem ."</td> <td class='text-center'>". $key->UserName  ."</td> "; ?>
               <?php echo "<td class='text-center'>" .$key->FName ."</td> <td class='text-center'>". $key->LName ."</td><td class='text-center'>". $key->MemPos ."</td> "; ?>
               <td>
             <div class="btn-group text-center">
                <a href="formUpdateAdd?id=<?= $key->IdMem ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
                  <i class="glyphicon glyphicon-pencil"></i>
               </a>
                <a href="member/deleteAdd/?id=<?php echo $key->IdMem; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
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





