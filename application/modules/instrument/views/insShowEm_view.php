
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>อุปกรณ์</span>
        </strong>
        <a href="formAddIns" class="btn btn-info pull-right">เพิ่มอุปกรณ์ใหม่</a>
    </div>


    <div class="panel-body">
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">ชื่ออุปกรณ์</th>
                    <th class="text-center">ชนิด</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">ชื่ออุปกรณ์</th>
                    <th class="text-center">ชนิด</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php if (isset($Instrument) && is_array($Instrument)): ?>

                        <?php foreach ($Instrument as $key): ?>

                            <?php
                            $type = $key->typeIns;
                            if ($key->typeIns == 0) {
                                $key->typeIns = "ไม้กอล์ฟ";
                            } else {
                                $key->typeIns = "รถกอล์ฟ";
                            }
                            ?>
        <?php echo "<td class='text-center'>" . $key->IdIns . "</td> <td class='text-center'>" . $key->NameIns . "</td> "; ?>
        <?php echo "<td class='text-center'>" . $key->typeIns . "</td> "; ?>
                            <td>
                                <div class="btn-group text-center">
                                    <a href="Instrument/formUpdate/?id=<?php echo $key->IdIns; ?>&NameIns=<?php echo $key->NameIns ?>&type=<?php echo $type; ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="Instrument/delete/?id=<?php echo $key->IdIns; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
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
    $(document).ready(function () {
        $('#example').DataTable();
    });
    
    
</script>






