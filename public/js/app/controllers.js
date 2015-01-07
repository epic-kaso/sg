/**
 * Created by kaso on 10/14/2014.
 */
'use strict';

/* Controllers */

angular.module('myApp.controllers', [])
    .controller('RouteController', ['$scope', '$stateParams', function ($scope, $stateParams) {
        console.log($stateParams);
    }])
    .controller('MyCtrl2', ['$scope', function ($scope) {

    }]);