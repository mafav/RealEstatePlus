angular
	.module('realestate-plus')
	.factory('propertyFactory', function($http) {

		function getHouses(){

			//var load = $http.get('/realestate-plus/php/getHouses.php');
			var load =  $http.get('data/houses.json');

			return load;
		}

		return{
			getHouses: getHouses
		}


	});


