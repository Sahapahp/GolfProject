<?php
date_default_timezone_set('Asia/Bangkok');

function thai_date($time) {
    $thai_month_arr = array(
        "0" => "Null",
        "1" => "มกราคม",
        "2" => "กุมภาพันธ์",
        "3" => "มีนาคม",
        "4" => "เมษายน",
        "5" => "พฤษภาคม",
        "6" => "มิถุนายน",
        "7" => "กรกฎาคม",
        "8" => "สิงหาคม",
        "9" => "กันยายน",
        "10" => "ตุลาคม",
        "11" => "พฤศจิกายน",
        "12" => "ธันวาคม"
    );
    $thai_date_return = date("j", $time) . " ";
    $thai_date_return .= $thai_month_arr[date("n", $time)] . " ";
    $thai_date_return .= (date("Y", $time) + 543);
    return $thai_date_return;
}
?>
<section class="content-wrapper" role="main">
    <div class="content" id="main-page-content "> 

        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <strong>
                    <span class="glyphicon glyphicon-th"></span>
                    <span>ตารางออกรอบ</span>
                </strong>
            </div>
            <div class="panel-body">
                <?php foreach ($Caddy as $key): ?>

                    <?php $timestamp = strtotime($key->DayBook);
                    echo thai_date($timestamp);
                    ?> - เวลา 
                    <?php
                    if ($key->Timebook == 1) {
                        echo '06:00-11.30';
                    }else if ($key->Timebook == 2) {
                        echo '11:30-15.00';
                    }else if ($key->Timebook == 3) {
                        echo '15:00-19.00';
                    }else{
                        echo '17:00-19.00';
                    }
                    ?>      
                    <br>
<?php endforeach; ?>
            </div>

        </div><!-- /.content -->
</section><!-- /MAIN --> 


