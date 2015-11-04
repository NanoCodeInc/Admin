'use strict'

var Suap = angular.module('Suap', ['ui.bootstrap','ngCookies']);

Suap.filter('startFrom',function(){
	return function(data, start){
		return data.slice(start);
	}
})
.controller('IndexCtrl', function($scope, $http, $cookies){
	$scope.users = [];
    $scope.pageSize = 5;
    $scope.currentPage = 1;
	
	$http({
	  method: 'GET',
	  url: '/ruta'
	}).then(function(response) {
    	$scope.users = response.data;
  	});
})

.controller('CreateCtrl', function($scope, $http, $location, $cookies){
	$scope.User = {};
	$scope.saveUser = function(){
		var req = {
 			method: 'POST',
 			url: '/auth/register',
 			data: $scope.User
		}
		$http(req).then(function(res){
			$scope.UserCreate = true;
			window.location.href = '/usuarios';
		});
	}
});