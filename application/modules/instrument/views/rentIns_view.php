<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> <div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>อุปกรณ์</span>
        </strong>
        <!--            <a href="#" class="btn btn-info pull-right">คืนอุปกรณ์</a>-->
        <a href="formRent" class="btn btn-info pull-right">เช่าอุปกรณ์</a>
    </div>
    <div class="panel-body">
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="text-center">รหัสการจอง</th>
                    <th class="text-center">ชือ่ผู้เช่า</th>
                    <th class="text-center">ชุดไม้กอล์ฟ</th>
                    <th class="text-center">รถกอล์ฟ</th>
                    <th class="text-center">สถานะการคืน</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">รหัสการจอง</th>
                    <th class="text-center">ชือ่ผู้เช่า</th>
                    <th class="text-center">ชุดไม้กอล์ฟ</th>
                    <th class="text-center">รถกอล์ฟ</th>
                    <th class="text-center">สถานะการคืน</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php if (isset($rent) && is_array($rent)): ?>

                        <?php foreach ($rent as $key): ?>

                            <?php
                            if ($key->status_rent == 1) {
                                $key->status_rent = '<input type="checkbox" data-on="คืนแล้ว" data-off="ยังไม่คืน" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger" disabled>';
                            } else {
                                $key->status_rent = '<input type="checkbox" data-on="คืนแล้ว" data-off="ยังไม่คืน" onchange="returnIns(' . $key->IdBooking . ')" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">';
                            }
                            ?>
        <?php echo "<td class='text-center'>" . $key->IdBooking . "</td> <td class='text-center'>" . $key->fname . " " . $key->lname . "</td> "; ?>
        <?php echo "<td class='text-center'>" . $key->InsNum . "</td><td class='text-center'>" . $key->CarNum . "</td> <td class='text-center'>" . $key->status_rent . "</td> "; ?>
                            <td>
                                <div class="btn-group text-center">
                                    <button href="#" onclick="getRent('<?php echo $key->IdBooking; ?>')" class="btn btn-warning" data-toggle="tooltip" title="รายละเอียดอุปกรณ์">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                    </button>
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

<div class="modal" tabindex="-1" role="dialog" id="detailIns">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">รายละเอียดอุปกรณ์</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    
                </button>
            </div>
            <div class="modal-body" id="bodyDetail">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#example').DataTable();
    function returnIns(id) {
        if (confirm("อุปกรณ์ครบหรือไม่?") == true) {
            $.ajax({
                url: "<?php echo base_url() ?>Instrument/returnIns",
                type: "POST",
                data: {id: id}
            }).done(function (data) {
                console.log(data);
                location.reload();
            });
        } else {
            location.reload();
        }
    }
    function getRent(id) {
        $.ajax({
            url: "<?php echo base_url() ?>Instrument/getInsRent",
            type: "POST",
            data: {id: id}
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            str = '';
            for (i = 0; i < json.length; i++) {
                if (json[i].typeIns == '0') {
                    type = "ไม้กอล์ฟ";
                } else {
                    type = "รถกอล์ฟ";
                }
                str += '<div class="row"><div class="col-lg-2">' + json[i].IdIns + '</div><div class="col-lg-4">' + json[i].NameIns + '</div><div class="col-lg-6">'+type+'</div></div>';
            }
            $('#bodyDetail').html(str);
            $('#detailIns').modal('show');
        });
    }
</script>