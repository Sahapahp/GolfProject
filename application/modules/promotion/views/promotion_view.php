<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>สมาชิก</span>
        </strong>
        <a href="<?php echo base_url(); ?>Promotion/openForm" class="btn btn-info pull-right">เพิ่มสมาชิกใหม่</a>
    </div>
    <div class="panel-body">
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="text-center">รหัส</th>
                    <th class="text-center">ชื่อโปรโมชั่น</th>
                    <th class="text-center">ราคาส่วนลด</th>
                    <th class="text-center">วันที่เริ่ม</th>
                    <th class="text-center">วันที่สินสุด</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="text-center">รหัส</th>
                    <th class="text-center">ชื่อโปรโมชั่น</th>
                    <th class="text-center">ราคาส่วนลด</th>
                    <th class="text-center">วันที่เริ่ม</th>
                    <th class="text-center">วันที่สินสุด</th>
                    <th class="text-center">จัดการ</th>
                </tr>
            </tfoot>
        </table>
    </div>

</div><!-- /.content -->

<script>
    list_Promotion();
    function list_Promotion() {
        $.ajax({
            url: "<?php echo base_url() ?>Promotion/listPromotion",
            type: "POST"
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            $('#example').DataTable({
                "aaData": json,
                "destroy": true,
                "aoColumns": [
                    {"data": "IdPro"},
                    {"data": "namePro"},
                    {"data": "DisPrice"},
                    {"data": "StartDay"},
                    {"data": "EndDay"},
                    {
                        "render": function (data, type, full, meta) {
                            return '<a href="<?php echo base_url(); ?>Promotion/openForm?id=' + full.IdPro + '" class="btn btn-xs btn-warning" data-toggle="tooltip" title="แก้ไข"><i class="glyphicon glyphicon-pencil"></i></a>' +
                                    '<a href="#" onClick="deletePromotion(\'' + full.IdPro + '\')" class="btn btn-xs btn-danger" data-toggle="tooltip" title="ลบ"><i class="glyphicon glyphicon-remove"></i></a>';
                        }, sClass: "dt-center", "width": "60"
                    }
                ],
                "dom": '<"top"lft><"bottom"ip><"clear">'
            });
        });
    }
    function deletePromotion(id) {
    if(confirm('คุณต้องการลบข้อมูลใช่หรือไม่') == true){
        $.ajax({
            url: "<?php echo base_url() ?>Promotion/deletePromotion",
            type: "POST",
            data: {id: id}
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            list_Promotion();
        });
        }
    }
</script>
