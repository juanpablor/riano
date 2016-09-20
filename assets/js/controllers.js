var portfolioControllers = angular.module('portfolioControllers',['ngAnimate']);

portfolioControllers.controller('ListController', ['$scope', '$http', function($scope, $http){
	$http.get('assets/js/portfolio.json').success(function(data){
		$scope.works = data;
		$scope.worksOrder = 'name';
	}) 
}]);

portfolioControllers.controller('DetailsController', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams){
	$http.get('assets/js/portfolio.json').success(function(data){
		$scope.works = data;
		$scope.whichItem = $routeParams.itemId;

		if($routeParams.itemId > 0){
			$scope.prevItem = Number($routeParams.itemId)-1;
		}
		else
		{
			$scope.prevItem = $scope.works.length-1;
		}

		if($routeParams.itemId < $scope.works.length-1){
			$scope.nextItem = Number($routeParams.itemId)+1;
		}
		else
		{
			$scope.nextItem = 0;
		}
	}) 
}]);