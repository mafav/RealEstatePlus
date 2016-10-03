angular
.module('realestate-plus')
.controller('appController', function($scope, $http, propertyFactory) {

	$scope.houses;
	$scope.$on('LOAD', function(){$scope.loading=true});
	$scope.$on('UNLOAD', function(){$scope.loading=false});

	propertyFactory.getHouses().success(function(data) {

		$scope.houses = data;
		console.log($scope.houses);

	}).error(function(error) {
		console.log(error);
	});

	$scope.addHouse = function(){
		$scope.testText = "Works";
		
		// $http.post("/realestate-plus/php/insert.php", {
		// 	'id':"8",
		// 	'address':"Test STREET",
		// 	'added':"10/10/10",
		// 	'img':"img-url-here.com"}).success(function(data,status,headers,config){
		// 		console.log("Data Inserted Successfully");
		// 	}).error(function(error){
		// 		console.log(error + "ERROR");
		// 	});

		}

});