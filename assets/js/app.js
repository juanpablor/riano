var myApp = angular.module('myApp',[
		'ngRoute',
		'portfolioControllers'
	]);

myApp.config(['$routeProvider', function($routeProvider){
	$routeProvider.
	when('/main',{
		templateUrl: 'partials/list.html',
		controller: 'ListController'
	}).
	when('/details/:itemId',{
		templateUrl: 'partials/details.html',
		controller: 'DetailsController'		
	}).
	otherwise({
		redirectTo: '/main'
	});
}]);

myApp.controller('dateFooter', function($scope){
	$scope.date = new Date();
});