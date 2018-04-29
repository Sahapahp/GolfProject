
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/Loading/waitMe.css">

<span></span>
<script src="https://cdn.jsdelivr.net/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Loading/waitMe.js"></script>
<script>
    $('body').waitMe({
        effect: 'img',
        text: 'ชำระเส็จสมบูรณ์',
        bg: 'white',
        maxSize: '',
        color: 'yellow',
        waitTime: 2000,
        textPos: 'vertical',
        fontSize: '48px',
        source: '<?php echo base_url(); ?>assets/images/successful.png',
        onClose: function () {
            window.location.href = '<?php echo base_url();?>Booking/bookshowem';
        }
    });
</script>