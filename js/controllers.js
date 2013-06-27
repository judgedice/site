'use strict';

/* Controllers */

function FolioController($scope, Projects) {
  $scope.projects = Projects.query();
  $scope.orderProp = 'age';
  
}

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
