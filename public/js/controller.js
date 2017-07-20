app.controller('MainController', function($scope, fctry) {

	// $scope.orbit = fctry.orbit();

	$scope.equipments = fctry.equipments();
});