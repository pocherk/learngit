<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>News Carousel</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<!-- <link rel="stylesheet" media="all" href="style/type/puritan.css" /> -->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.min.js"></script>

<script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() {
    // Initialise the first and second carousel by class selector.
	// Note that they use both the same configuration options (none in this case).
	jQuery('.d-carousel .carousel').jcarousel({
        scroll: 1
    });
});
</script>
</head>
<body>

<?php $arr = [
        'slide1.jpg' => 'Слайд 1',
        'slide2.jpg' => 'Слайд 2',
        'slide3.jpg' => 'Слайд 3',
        'slide4.jpg' => 'Слайд 4',
        'slide1.jpg' => 'Слайд 1',
        'slide2.jpg' => 'Слайд 2',
        'slide3.jpg' => 'Слайд 3',
        'slide4.jpg' => 'Слайд 4',
    ];
?>
  
 <!-- Begin Wrapper -->
  <div id="wrapper">
  
    <div class="d-carousel">
      <ul class="carousel">
          <?php foreach($arr as $photo=>$alt): ?>
               <li><a href="#"><img src="style/images/<?=$photo?>" alt="<?=$alt?>" /></a></li>
          <?php endforeach; ?>
       </ul>
    </div>
    <div class="clear"></div>
  </div>
  
  <!-- End Wrapper --> 



</body>
</html>