<?php if (isset($_GET['id'])) {
    $id = $_GET['id'];
}?>
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/Loading/waitMe.css">

<span></span>
<script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Loading/waitMe.js"></script>
<script>
    paySuccessful();
    $('body').waitMe({
        effect: 'img',
        text: 'ชำระเส็จสมบูรณ์',
        bg: 'white',
        maxSize: '',
        color: 'yellow',
        waitTime: -1,
        textPos: 'vertical',
        fontSize: '48px',
        source: '<?php echo base_url(); ?>assets/images/successful.png',
        onClose: function () {
//            window.location.href = '<?php echo base_url(); ?>Booking/bookshowem';
        }
    });
    function paySuccessful() {
        var id = '<?php echo $id;?>';
        $.ajax({
            url: "<?php echo base_url() ?>Booking/setBookingStatus",
            type: "POST",
            data:{id:id}
        }).done(function (data) {
            var json = JSON.parse(data);
            console.log(json);
            if(json) {window.location.href = '<?php echo base_url(); ?>Booking/bookshowem';}
        });
    }

</script>