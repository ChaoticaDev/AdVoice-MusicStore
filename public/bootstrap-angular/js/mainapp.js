var app = angular.module('app', []);
app.controller('MenuController', function($scope) {
    $scope.home = "Home";
	
	$scope.user = {username:"MontrayDavis"};
	$scope.userData = localStorage.getItem("user-data");
	
	$scope.setupCanas = function (){
		$(".store-container").height($(document).height() - $("header").outerHeight());
		$(".store-container").css("margin-top", $("header").outerHeight());
		$(".store-container").slideDown(1000);
	}
	
});