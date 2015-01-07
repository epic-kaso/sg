/**
 * Created by kaso on 10/14/2014.
 */
'use strict';


// Declare app level module which depends on filters, and services
var app = angular.module('myApp', [
    'ui.router',
    'ngAnimate',
    'myApp.filters',
    'myApp.services',
    'myApp.directives',
    'myApp.controllers'
]);

app.constant('BASE_URL', 'js/views/');

app.run(function ($rootScope) {
    $rootScope.contact = true;

    $rootScope.showContact = function () {
        console.log('show contact called');
        var cont = $rootScope.contact;
        cont = !cont;
        $rootScope.contact = cont;
    };
});

