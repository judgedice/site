'use strict';

/* App Module */

angular.module('judgedice', [ 'judgediceServices', 'judgediceFilters', 'ui.bootstrap']).
 config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/work', {templateUrl: 'templates/folio.html',   controller: FolioController}).
      when('/home', {templateUrl: 'templates/home.html' }).
      otherwise({redirectTo: '/work'});
}]);;
