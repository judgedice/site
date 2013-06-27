'use strict';

/* Services */

angular.module('judgediceServices', ['ngResource']).
    factory('Projects', function($resource){
  return $resource('data/projects.json', {}, {
    query: {method:'GET', isArray:true}
  });
});