<?php

// Nothing here.
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="styles.css" />
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700italic' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="js/vid-lightbox.js"></script>

<script>
$(document).ready(function () {
  $(".blightbox").blightbox();
  $(".blightbox-autoplay").blightbox({autoplay: true});
});
</script>

<title>Judge Here</title>
</head>

<body>


<div id="container">

<div id="left_column">
</div>

<div id="right_column">
</div>

</div>

<img src="img/pentair.jpg" class="blightbox" data-vimeo="68639818"/><br>Pentair<br>

<img src="img/amfam.jpg" class="blightbox" data-vimeo="68639813"/><br>American Family<br>

<img src="img/studio.jpg" class="blightbox" data-vimeo="68639815"/><br>Star Studio<br>

<img src="img/elux.jpg" class="blightbox" data-vimeo="68874366"/><br>Elux<br>



</body>

</html>
