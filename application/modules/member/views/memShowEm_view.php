
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <strong>
                                <span class="glyphicon glyphicon-th"></span>
                                <span>สมาชิก</span>
                            </strong>
                            <a href="printMember" class="btn btn-info pull-right">พิมพ์รายงานสมาชิก</a>
                            <a href="formAddMem" class="btn btn-info pull-right">เพิ่มสมาชิกใหม่</a>
                            
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
                                        <th class="text-center">วันที่เข้ารวม</th>
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
                                        <th class="text-center">วันที่เข้ารวม</th>
                                        <th class="text-center">จัดการ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <?php if (isset($member) && is_array($member)): ?>

                                            <?php foreach ($member as $key): ?>

                                                <?php
                                                if ($key->MemPos == 0) {
                                                    $key->MemPos = "สมาชิกทั่วไป";
                                                } else {
                                                    $key->MemPos = "สมาชิกพรีเมี่ยม";
                                                }
                                                ?>

                                                <?php echo "<td class='text-center'>" . $key->IdMem . "</td> <td class='text-center'>" . $key->UserName . "</td> "; ?>
                                                <?php echo "<td class='text-center'>" . $key->FName . "</td> <td class='text-center'>" . $key->LName . "</td><td class='text-center'>" . $key->MemPos . "</td><td class='text-center'>" . $key->cr_date . "</td> "; ?>
                                                <td>
                                                    <div class="btn-group text-center">
                                                        <a href="formUpdateMem?id=<?= $key->IdMem ?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                        </a>
                                                        
                                                        <a href="Member/delete/?id=<?php echo $key->IdMem; ?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ">
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

            function editData() {
                var data = new FormData();
                data.append('IdMem', '');
                data.append('UserName', '');
                data.append('Password', '');
                data.append('FName', '');
                data.append('LName', '');
                data.append('Address', '');
                data.append('Birthday', '');
                data.append('IdCard', '');
                data.append('OnlineStatus', '');
                data.append('MemPos', '');
                data.append('Phone', '');
                data.append('Email', '');
                data.append('work', '');

                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'somewhere', true);
                xhr.onload = function () {
                    // do something to response
                    console.log(this.responseText);
                };
                xhr.send(data);
            }
        </script>

    </body>
</html>






