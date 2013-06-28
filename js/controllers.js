'use strict';

/* Controllers */

function FolioController($scope, Projects) {
  $scope.projects = Projects.query();
  $scope.orderProp = 'age';
  
}

// function TooltipController( $scope ) {


// 	$scope.flash = "Flash Based Project";
// 	$scope.code  = "Hands on Coding";
// 	$scope.data = "Data Driven Application";
// 	$scope.enterprise = "Enterprise Class Project";
// 	$scope.facebook = "Facebook Application";
// 	$scope.game = "Game Development";
// 	$scope.interactive = "Interactive Project";
// 	$scope.leader = "Project Leader";
// 	$scope.mobile = "Mobile Platform Delivery";
// 	$scope.air = "Adobe AIR Platform";
// 	$scope.site = "Web Site";
// 	$scope.jquery = "JQuery in Use";



// }
//PhoneListCtrl.$inject = ['$scope', 'Phone'];



// function PhoneDetailCtrl($scope, $routeParams, Phone) {
//   $scope.phone = Phone.get({phoneId: $routeParams.phoneId}, function(phone) {
//     $scope.mainImageUrl = phone.images[0];
//   });

//   $scope.setImage = function(imageUrl) {
//     $scope.mainImageUrl = imageUrl;
//   }
// }

// //PhoneDetailCtrl.$inject = ['$scope', '$routeParams', 'Phone'];
