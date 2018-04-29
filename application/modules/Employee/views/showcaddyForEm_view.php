    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>พนักงาน</span>
       </strong>
          <a href="printCaddy" class="btn btn-info pull-right">พิมพ์แคดดี้</a>
         <a href="formAddEmp" class="btn btn-info pull-right">เพิ่มแคดดี้ใหม่</a>
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
            <th class="text-center">สถานะ</th>
            <th class="text-center" style="width: 100px;">จัดการ</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ชื่อผู้ใช้</th>
            <th class="text-center">ชื่อ</th>
            <th class="text-center">นามสกุล</th>
            <th class="text-center">ตำแหน่ง</th>
            <th class="text-center">สถานะ</th>
            <th class="text-center" style="width: 100px;">จัดการ</th>
          </tr>
        </tfoot>
        <tbody>
          <?php foreach ( $employee as $key ): ?>
            <tr>
                <?php if ($key->Position==0) {
                $key->Position="พนักงาน";
            }else{
                $key->Position="แคดดี้";
           }?>
           <?php if ($key->OnlineStatus==0) {
                $key->OnlineStatus="ใช้งาน";
          }else{
                $key->OnlineStatus="ไม่ใช้งาน";
         }?>
         <?php echo "<td class='text-center'>" .$key->IdEmp .
                    "</td> <td class='text-center'>". $key->UserName ."</td> "; ?>
         <?php echo "<td class='text-center'>" .$key->FName .
                    "</td> <td class='text-center'>". $key->LName .
                    "</td><td class='text-center '>". $key->Position .
                    "</td>  <td class='text-center'>". $key->OnlineStatus ."</td> "; ?>
       <td>
          <div class="btn-group text-center">
            <a href="formUpdateEmp?id=<?= $key->IdEmp ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
              <i class="glyphicon glyphicon-pencil"></i>
            </a>

            <a href="employee/deleteEm/?id=<?php echo $key->IdEmp; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
              <i class="glyphicon glyphicon-remove"></i>
            </a>
          </div>
        </td>
      </tr>
  <?php endforeach; ?>
      </tbody>
</table>
     </div>

    </div><!-- /.content -->


  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>







