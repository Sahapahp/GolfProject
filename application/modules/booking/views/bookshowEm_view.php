
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>รายการจอง</span>
        </strong>
        <?php
        $session_data = $this->session->logged_in;
        if ($session_data->work == 2) {
            echo '<a href="printBooking" class="btn btn-info pull-right">พิมพ์รายงายการจอง</a>';
        }
        ?>
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
                    <th class="text-center">สภานะการจอง</th>
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
                    <th class="text-center">สภานะการจอง</th>
                    <th class="text-center" style="width: 100px;">จัดการ</th>
                </tr>
            </tfoot>
            <tbody>

                <?php if (isset($booking) && is_array($booking)): ?>
                    <?php foreach ($booking as $key): ?>
                        <tr>
                            <?php
                            if ($key->Timebook == 1) {
                                $key->Timebook = "06.00 – 11.30";
                            } else if ($key->Timebook == 2) {
                                $key->Timebook = "11.30 – 15.00";
                            } else if ($key->Timebook == 3) {
                                $key->Timebook = "15.00 – 19.00";
                            } else {
                                $key->Timebook = "17.00 – 19.00";
                            }
                            ?>
                            <!--  <?php
                            if ($key->delete_status == 0) {
                                $delete_status = '<span style="color:green">ใช้งาน</span>';
                            } else {
                                $delete_status = '<span style="color:red">ยกเลิก</span>';
                            }
                            ?>  -->

                            <?php
                            if ($key->BookStatus == true) {
                                $pay = 1;
                                $key->BookStatus =  '<span style="color:green">ชำระแล้ว</span>';
                            } else {
                                $pay = 0;
                                
                                $key->BookStatus =  '<span style="color:red">ยังไม่ชำระ</span>';
                            }
                            ?>

                            <?php
                            echo "<td class='text-center'>" . $key->IdBooking .
                            "</td><td class='text-center'>" . $key->fname . " " . $key->lname .
                            "</td> <td class='text-center'>" . $key->Hole . "</td> ";
                            ?>
                            <?php
                            echo "<td class='text-center'>" . $key->DayBook .
                            "</td> <td class='text-center'>" . $key->Timebook . "</td>";
                            ?>
                            <?php
                            echo "<td class='text-center'>" . $key->BookStatus .
                            "</td>";
                            ?>
                            <?php
                            echo "<td class='text-center'>" . $delete_status .
                            "</td>";
                            ?>
                            <td>
                                <div class="btn-group text-center">
        <?php if ($session_data->work == 3) {
            if($key->delete_status == 0){
            ?>
                                        <a href="booking/printDetail/?id=<?php echo $key->IdBooking; ?>" onClick="" class="btn btn-xs btn-success" data-toggle="tooltip" title="ชำระเงิน">
                                            <i class="glyphicon glyphicon-folder-open"></i>
                                        </a>
        <?php }} ?>
        <?php if ($pay == 0 ) { 
                                    if($key->delete_status == 0){?>
                                        <a href="Booking/formaddbook?id=<?php echo $key->IdBooking; ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
                                            <i class="glyphicon glyphicon-pencil"></i>
                                        </a>

                                        <a href="booking/delete/?id=<?php echo $key->IdBooking; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
                                            <i class="glyphicon glyphicon-remove"></i>
                                        </a><?php }} ?>


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
    $(document).ready(function () {
        $('#example').DataTable({
        "order": [[ 0, "desc" ]]
    } );
    });
</script>







