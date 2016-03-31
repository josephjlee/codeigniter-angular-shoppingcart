(function(){

	'use strict';
	var myApp = angular.module('TawanCleanFit', ['ngAnimate','ngCart']);
	var base_url = 'http://localhost/c';

	myApp.controller('selectionController', ['$scope','$http','$timeout', '$window','setStore','$rootScope', 'ngCart',  function($scope, $http, $timeout, $window, setStore,$rootScope,ngCart) {

		var getPackages = base_url + '/app/packages_ajax/';
		var getProducts = base_url + '/app/products_ajax/index/12/';
		var packageList = [];
		var productList = [];
 		var packages 	= new Array();

 		// Fetch Packages
		$http.get(getPackages).success(function(response){
			angular.forEach(response.packages, function(element) {
				packageList.push(element)
			});
		});
		// Fetch Products
		$http.get(getProducts).success(function(response){
			angular.forEach(response.products, function(element) {
				productList.push(element)
			});
		});

 		$scope.clearStorages = function() {
 			console.log(localStorage.removeItem('packages_max'));
 			console.log(localStorage.removeItem('package_id'));
 			console.log(localStorage.removeItem('cart'));
 		}

		$scope.selectPackages = function(package_id, packages_max) {
			setStore.setData('package_id', package_id);
			setStore.setData('packages_max', packages_max);
		}

		$scope.selectedPackagesMax = function() {
			return setStore.getData('packages_max');
		};
		
		// Pass variables
		$scope.packages_list = packageList;
		$scope.products_list = productList;
	 	
	 	$scope.showHide = function() {
	 		if(setStore.getData('packages_max') === null) {
	 			return true;
	 		}
	 		return false;
	 	}

	}]);

 	
 	myApp.directive('ngselectPackages', ['$compile', function($compile){
        return {
            restrict : 'E',
            controller : 'selectionController',
            scope: {
                packagesId:'@',
                packagesMax:'@'
            },
            transclude: true,
            templateUrl: function(element, attrs) {
            	return base_url + '/templates/packages.html';
            },
            link:function(scope, element, attrs){
    	 		scope.attrs = attrs;
            }
        };
    }]);
 
 
    myApp.factory('setStore', ['$window','$rootScope', function ($window, $rootScope) {
		angular.element($window).on('storage', function(event) {
			// if (event.key === 'packagesStorage') {
			$rootScope.$apply();
			// }
		});
		return {
			setData: function(key, val) {
				if(val !== undefined) {
					$window.localStorage && $window.localStorage.setItem(key, val);
					return true;
				}
				return false;
			},
			getData: function(key) {
				if(key !== undefined) {
					return $window.localStorage && $window.localStorage.getItem(key);
				}
				return null;
			}
		};
	}]);





 


})();