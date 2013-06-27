'use strict';

/* Filters */

angular.module('judgediceFilters', []).filter('tagurl', function() {
  return function(input) {
  	var url = "";
  	if( input == "flash") url = "img/flash.png";
  	if( input == "code") url = "img/code.png";
  	if( input == "data") url = "img/data.png";
  	if( input == "enterprise") url = "img/enterprise.png";
  	if( input == "facebook") url = "img/fb.png";
  	if( input == "game") url = "img/game.png";
  	if( input == "interactive") url = "img/interactive.png";
  	if( input == "leader") url = "img/leader.png";
  	if( input == "mobile") url = "img/mobile.png";
  	if( input == "air") url = "img/air.png";
    if( input == "site") url = "img/site.png";
    if( input == "jquery") url = "img/jquery.png";
    
  	
  	
    return url;
  };
});
