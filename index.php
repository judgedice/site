<?php

// Nothing here.
?>

<html ng-app="judgedice" id="top">

<head>

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700italic' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
<script src="js/ui-bootstrap-0.3.0.min.js" type="text/javascript"></script>
<script src="js/ui-bootstrap-tpls-0.3.0.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>


<script>

var modalControl = function ($scope) {

  $scope.open = function () {
    $scope.shouldBeOpen = true;
  };

  $scope.close = function () {
    $scope.shouldBeOpen = false;
  };

  $scope.items = ['item1', 'item2'];

  $scope.opts = {
    backdropFade: true,
    dialogFade:true
  };

};

</script>


<title>Judge Dice, Creative Technical Director, Solver</title>
</head>

<body>
<h1>Judge Dice, All Things Internet</h1>

<p>Here is a list of important, recent projects. <a href='ma&#105;lt&#111;&#58;ju%&#54;4&#103;e%64%69ce&#37;4&#48;g%&#54;&#68;&#37;61i&#37;&#54;C&#46;co%6&#68;'>contact me</a> if interested.</p>

<div id="container">
<div id="left_column">

<h3>American Family Insurance</h3>
<h5>AIR/Starling Touchscreen Application</h5>
<div ng-controller="modalControl">
    <button class="btn" ng-click="open()">See the Video</button>
    <div modal="shouldBeOpen" close="close()" options="opts">
        <div class="modal-header">
            <h4>American Family Touchscreen Application</h4>
        </div>
        <div class="modal-body">
            <iframe src="http://player.vimeo.com/video/68639813" width="680" height="420" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning cancel" ng-click="close()">CLOSE</button>
        </div>
    </div>
</div>


<h3>Electrolux AG</h3>
<h5>User Experience Pilot</h5>
<div ng-controller="modalControl">
    <button class="btn" ng-click="open()">See the Video</button>
    <div modal="shouldBeOpen" close="close()" options="opts">
        <div class="modal-header">
            <h4>Electrolux User Experience</h4>
        </div>
        <div class="modal-body">
            <iframe src="http://player.vimeo.com/video/68874366" width="640" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning cancel" ng-click="close()">CLOSE</button>
        </div>
    </div>
</div>

<h3>Pentair, Ltd.</h3>
<h5>Global Corporate Website Merger</h5>
<div ng-controller="modalControl">
    <button class="btn" ng-click="open()">See the Video</button>
    <div modal="shouldBeOpen" close="close()" options="opts">
        <div class="modal-header">
            <h4>Pentair - Global Corporation</h4>
        </div>
        <div class="modal-body">
            <iframe src="http://player.vimeo.com/video/68639818" width="640" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning cancel" ng-click="close()">CLOSE</button>
        </div>
    </div>
</div>

<h3>Coinstar, LLC</h3>
<h5>Luxe Photo Booth Application</h5>
<div ng-controller="modalControl">
    <button class="btn" ng-click="open()">See the Video</button>
    <div modal="shouldBeOpen" close="close()" options="opts">
        <div class="modal-header">
            <h4>Star Studio Development</h4>
        </div>
        <div class="modal-body">
            <iframe src="http://player.vimeo.com/video/68639815" width="640" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning cancel" ng-click="close()">CLOSE</button>
        </div>
    </div>
</div>


<h3>Material Group Show Reel</h3>
<h5>Creative Leadership from MG</h5>




</div><!-- end left column -->

<div id="right_column">










</div><!-- end right column -->













</div>

</body>

</html>
