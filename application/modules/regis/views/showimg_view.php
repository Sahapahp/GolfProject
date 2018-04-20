<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html ><head>
<link rel="stylesheet" href="<?php echo base_url();?>assets/images/PixelGreen.css" type="text/css" /><title>Rachet Golf</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body >

<div class="w3-content" style="max-width:800px;position:relative">

<img class="mySlides" src="hole4.jpg" style="width:100%">
<img class="mySlides" src="hole5.jpg" style="width:100%">
<img class="mySlides" src="hole6.jpg" style="width:100%">
<img class="mySlides" src="hole7.jpg" style="width:100%">

<a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html> 