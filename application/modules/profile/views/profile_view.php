
<div class="panel-body">


    <?php
    $id = "";
    $session_data = $this->session->logged_in;
//    echo $session_data->work;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    ?>
    <section class="content-wrapper" role="main">
        <div class="content" id="main-page-content "> 

            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <strong>
                        <span class="glyphicon glyphicon-th"></span>
                        <span>ข้อมูลส่วนตัว</span>
                    </strong>
                    <a href="#" class="btn btn-info pull-right">แก้ไขข้อมูลส่วนตัว</a>
                </div>
                <div class="panel-body row" id="bodyProfile">

                </div>
            </div><!-- /.content -->
    </section><!-- /MAIN --> 
</div>
<script>
    getProfile();
    function getProfile() {
        id = '<?php echo $id; ?>';
        if (id) {
            $.ajax({
                url: "<?php echo base_url() ?>Profile/getProfile",
                type: "POST",
                data: {id: '<?php echo $id; ?>', work: '<?php echo $session_data->work; ?>'}
            }).done(function (data) {
                dataJson = JSON.parse(data);
                console.log(dataJson);
                var Position;
                var OnlineStatus;
                if (dataJson[0].Position == 0) {
                    Position = 'พนักงาน';
                } else if (dataJson[0].Position == 1) {
                    Position = 'แคดดี้';
                }else{
                    Position = 'ผู้ใช้ทั่วไป';
                }

                if (dataJson[0].OnlineStatus == 0) {
                    OnlineStatus = 'ใช้งาน';
                } else if (dataJson[0].OnlineStatus == 1) {
                    OnlineStatus = 'ไม่ใช้งาน';
                } else {
                    OnlineStatus = '-';
                }
                strHTML = '<div class="col-lg-4">' +
                        '<div>ชื่อ-สกุล : ' + dataJson[0].FName + ' ' + dataJson[0].LName + '</div>' +
                        '<div>วันเกิด : ' + dataJson[0].Birthday + '</div>' +
                        '<div>ที่อยู่ : ' + dataJson[0].Address + '</div>' +
                        '<div>เบอร์โทรศัพท์ : ' + dataJson[0].Phone + '</div>' +
                        '</div>' +
                        '<div class="col-lg-4">' +
                        '<div>ตำแหน่ง : ' + Position + '</div>' +
                        '<div>สถานะ : ' + OnlineStatus + '</div>' +
                        '<div> username: ' + dataJson[0].UserName + '</div>' +
                        '<div> อีเมล: ' + dataJson[0].Email + '</div>' +
                        '</div>';

                $('#bodyProfile').html(strHTML);
            });
        }
    }
</script>


