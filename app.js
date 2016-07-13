
var frontend = angular.module('frontend',[]);
frontend.controller('WebController', function($scope,$http){
	$scope.names = ["CA,San Francisco", "CA,San Diego", 
					"TX,Dallas", "TX,Austin", "OK,Tulsa", 
					"OK,Oklahoma City", "KS,Kansas City", 
					"KS,Manhattan", "NY,New York", 
					"FL, Miami", "CO,Denver" ];
	
	$scope.state = "";
	$scope.city ="";
	$scope.getData = function(data)
	{
		var segments = data.split(',');	
		$scope.state = segments[0];
		console.log($scope.state);
		$scope.city = segments[1];
		var tempUrl = "http://prod-joyfulhome-api.synapsys.us/location/amenitiesInLocation/";
		tempUrl += $scope.state+"/"+$scope.city;
		$http.get(tempUrl).then(function(response) {
			$scope.restaurant = response.data;
			$scope.grocers = response.data;
			$scope.banks = response.data;
			$scope.others = response.data;
    });
	}
});
 
frontend.controller('restCtrl', function($scope) {
    $scope.visible = false;
	
	$scope.rest = function(){
		$scope.visible = true;
	}	
});


frontend.controller('groceryCtrl', function($scope) {
    $scope.visible = false;
	
	$scope.grocery = function(){    
		$scope.visible = true;
	}	
});


frontend.controller('bankCtrl', function($scope) {
    $scope.visible = false;
	
	$scope.bank = function(){    
		$scope.visible = true;
	}	
});


frontend.controller('otherCtrl', function($scope) {
    $scope.visible = false;
	
	$scope.other = function(){
		$scope.visible = true;	
	}	
});