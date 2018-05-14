
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>บักทึกการเข้าใช้งาน</span>
        </strong>
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
                    <th class="text-center">การเข้าใช้งาน</th>
                    <th class="text-center">สถานะ</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">ชื่อ-สกุล</th>
                    <th class="text-center">หลุม</th>
                    <th class="text-center">วัน</th>
                    <th class="text-center">เวลา</th>
                    <th class="text-center">การเข้าใช้งาน</th>
                    <th class="text-center">สถานะ</th> 
                </tr>
            </tfoot>
            <tbody>
                
                    <?php foreach ($booking as $key): ?>
                <tr>
                        <?php
                        if ($key->Timebook == 6) {
                            $key->Timebook = "06.00 – 11.30";
                        } else if ($key->Timebook == 7) {
                            $key->Timebook = "11.30 – 15.00";
                        } else if ($key->Timebook == 8) {
                            $key->Timebook = "15.00 – 19.00";
                        } else {
                            $key->Timebook = "17.00 – 19.00";
                        }
                        ?>
                        

                        <?php
                        if ($key->using_status == true) {
                            $key->using_status = "เข้าใช้งาน";
                        } else {
                            $key->using_status = "ไม่เข้าใช้งาน";
                        }
                        if ($key->delete_status == 0) {
                                $delete_status = '<span style="color:green">ใช้งาน</span>';
                            } else {
                                $delete_status = '<span style="color:red">ยกเลิก</span>';
                            }
                        ?>

                        <?php
                        echo "<td class='text-center'>" . $key->IdBooking .
                        "</td><td class='text-center'>" . $key->fname . " " . $key->lname .
                        "</td> <td class='text-center'>" . $key->Hole . "</td> ";
                        ?>
                    <?php echo "<td class='text-center'>" . $key->DayBook .
                    "</td> <td class='text-center'>" . $key->Timebook . "</td>";
                    ?>
    <?php echo "<td class='text-center'>" . $key->using_status ."</td>"."</td> <td class='text-center'>" . $delete_status . "</td>";
    ?>

                    
</tr>
<?php endforeach; ?>
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









