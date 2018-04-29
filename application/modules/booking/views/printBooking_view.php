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
            <h2>รายงานข้อมูลการจอง</h2><br>
            
        </div>
        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="">ID</th>
            <th class="">ชื่อ-สกุล</th>
            <th class="">หลุม</th>
            <th class="">วัน</th>
            <th class="">เวลา</th>
            <th class="">การชำระ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           <?php if ( isset($booking) && is_array($booking) ): ?>
			<?php foreach ( $booking as $key ): ?>

         <?php if ($key->Timebook==6) {
                  $key->Timebook="06.00 – 11.30";
                }else if ($key->Timebook==7) 
                {
                 $key->Timebook="11.30 – 15.00";
               }else if ($key->Timebook==8) {
                 $key->Timebook="15.00 – 19.00";
               }else  {
                 $key->Timebook="17.00 – 19.00";
               }
               ?>
         <!--  <?php if ($key->OnlineStatus==0) {
                  $key->OnlineStatus="ใช้งาน";
                }else{
                 $key->OnlineStatus="ไม่ใช้งาน";
               }?>  -->
               
               <?php if ($key->BookStatus==true) {
                  $key->BookStatus="ชำระแล้ว";
                }else{
                 $key->BookStatus="ยังไม่ชำระ";
               }?>

			<?php echo "<td class=''>" .$key->IdBooking .
      "<td class=''>".$key->fname  ." ".  $key->lname.
      "</td> <td class=''>". $key->Hole ."</td> "; ?>
			<?php echo "<td class=''>" .$key->DayBook .
      "</td> <td class=''>". $key->Timebook ."</td>"; ?>
               <?php echo "<td class=''>" .$key->BookStatus .
      "</td>"; ?>
       
    </tr>

			<?php endforeach; ?>
			<?php else: ?>
				ไม่มีข้อมูล
			<?php endif; ?>
          </tbody>
     </table>

    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/js/functions.js"></script>
    <script>
    window.print();
    </script>
</html>
