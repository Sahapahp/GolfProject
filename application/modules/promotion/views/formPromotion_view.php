
<div class="panel-body">

    <script language="JavaScript">
        function chkNumber(ele)
        {
            var vchar = String.fromCharCode(event.keyCode);
            if ((vchar < '0' || vchar > '9') && (vchar != '.'))
                return false;
            ele.onKeyPress = vchar;
        }
    </script>
    <?php
    $id = "";
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
                        <span>เพิ่มข้อมูลสมาชิก</span>
                    </strong>
                </div>
                <div class="panel-body">
<?php echo form_open('Promotion/FormSubmit'); ?> 
                    <form>   
                        <input class="form-control" type="text" name="id" style="display: none"/>
                        <div class="form-group"> ชื่อโปรโมชั่น : 
                            <input class="form-control" type="text" name="namePro" required="" />
                        </div>

                        <div class="form-group"> ส่วนลด : 
                            <input class="form-control" type="number" name="price" required="" />
                        </div>

                        <div class="form-group"> วันเริ่มต้น : 
                            <input class="form-control" type="date" name="startDay" required="" />
                        </div>

                        <div class="form-group"> วันสินสุด : 
                            <input class="form-control" type="date" name="endDay" required="" />
                        </div>
                        <input type="submit" colspan="1" class="btn btn-info   pull-right" value="ยืนยัน"/></td>
                    </form>
                </div>
            </div><!-- /.content -->
    </section><!-- /MAIN --> 
</div>
<script>
    getPromotion();
    function getPromotion() {
        id = '<?php echo $id; ?>';
        if (id) {
            $.ajax({
                url: "<?php echo base_url() ?>Promotion/getPromotion",
                type: "POST",
                data: {id: '<?php echo $id; ?>'}
            }).done(function (data) {
                dataJson = JSON.parse(data);
                console.log(dataJson);
                $('input[name="id"]').val(dataJson[0].IdPro);
                $('input[name="namePro"]').val(dataJson[0].namePro);
                $('input[name="price"]').val(dataJson[0].DisPrice);
                $('input[name="startDay"]').val(dataJson[0].StartDay);
                $('input[name="endDay"]').val(dataJson[0].EndDay);
            });
        }
    }
</script>






