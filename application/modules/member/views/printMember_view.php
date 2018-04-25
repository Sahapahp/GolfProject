<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>รายงาน</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/css/main.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/DataTables-1.10.16/datatables.min.js" />-->
        <script language="JavaScript">
            function chkNumber(ele)
            {
                var vchar = String.fromCharCode(event.keyCode);
                if ((vchar < '0' || vchar > '9') && (vchar != '.'))
                    return false;
                ele.onKeyPress = vchar;
            }
        </script>
    </head>
    <body>
        <div>
            <h1>Rachet Golf Club</h1>
            <h2>รายงานข้อมูลสมาชิก</h2><br>
            
        </div>
        <table class="table">
            <tr><th>ลำดับ</th><th>รหัสสมาชิก</th><th>ชื่อ-สกุล</th><th>ชื่อผู้ใช้</th><th>อีเมล</th><th>เบอร์โทรศัพท์</th><th>สถานะ</th></tr>
        <?php $i=1; foreach ($member as $key): ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $key->IdMem;?></td>
                <td><?php echo $key->FName;?></td>
                <td><?php echo $key->UserName;?></td>
                <td><?php echo $key->Email;?></td>
                <td><?php echo $key->Phone;?></td>
                <td><?php if($key->OnlineStatus == 0) {echo "ใช้งาน";}else{echo "ไม่ใช้งาน";} $i++;?></td>
            </tr>
        <?php endforeach; ?>
</table>

    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/js/functions.js"></script>
    <script>
    window.print();
    </script>
</html>
