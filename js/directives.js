'use strict';

/* Directives */


angular.module('judgediceDirectives', [])
  .directive("masonry", function($parse, $timeout) {
    return {
      restrict: 'AC',
      link: function (scope, elem, attrs) {
        //elem.masonry({ itemSelector: '.thumbnail'});
        // Opitonal Params, delimited in class name like:
        // class="masonry:70;"
        elem.masonry({ itemSelector: '.project', gutterWidth: 10 });
      },
      controller : function($scope,$element){
          var bricks = [];
          this.appendBrick = function(child, brickId, waitForImage){
            function addBrick() {
              $element.masonry('appended', child, true);

              // If we don't have any bricks then we're going to want to 
              // resize when we add one.
              if (bricks.length === 0) {
                // Timeout here to allow for a potential
                // masonary timeout when appending (when animating
                // from the bottom)
                $timeout(function(){
                  $element.masonry('resize');  
                });  
              }

              // Store the brick id
              var index = bricks.indexOf(brickId);
              if (index === -1) {
                bricks.push(brickId);
              }
            }

            if (waitForImage) {
              child.imagesLoaded(addBrick);      
            } else {
              addBrick();
            }
          };

          // Removed bricks - we only want to call masonry.reload() once
          // if a whole batch of bricks have been removed though so push this
          // async.
          // var willReload = false;
          function hasRemovedBrick() {
            $element.masonry("reload");
            // if (!willReload) {
            //   willReload = true;
              // $scope.$evalAsync(function(){
            //     willReload = false;
                // console.log("RELOADING");
                
              // });
            // }
          }

          this.removeBrick = function(brickId){
              hasRemovedBrick();
              var index = bricks.indexOf(brickId);
              if (index != -1) {
                bricks.splice(index,1);
              }
          };
      }
    };     
  })
  .directive('masonryBrick', function ($compile) {
    return {
      restrict: 'AC',
      require : '^masonry',
      link: function (scope, elem, attrs, MasonryCtrl) {

      elem.imagesLoaded(function () {
        MasonryCtrl.appendBrick(elem, scope.$id, true);
      });

      scope.$on("$destroy",function(){
          MasonryCtrl.removeBrick(scope.$id);
      }); 
    }
  };
});