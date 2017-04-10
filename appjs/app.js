var app = angular.module('lmsTools', []);

		
app.controller('testCTRL', function($scope){
	$scope.name = "Rene";

});


app.controller('sites', function ($scope,$http) {

	// $scope.test = "stupid";
	
$scope.clearFilter = function() {
		console.log("xxx");
		$scope.web = {};
	};


	// $scope.http  = "HTTP";
	$http.get('http://lmsaccess.com/dashboard/stream/websites.txt').then(function(response){
		


		$scope.sites = response.data.websites; // reponse is the variable passed in .data is a function of the response object 
										   //.site is the name of my list of objects. once i loop thru the sites variable i can 
										   //use just the variable in the ng-repeat to call the object variables 
				

	});

	
	 
});



app.controller('acronyms', function ($scope,$http) {
	// $scope.http  = "HTTP";
	$http.get('http://lmsaccess.com/dashboard/stream/acronym.txt').then(function(response){
		


		$scope.acronym = response.data.acronym; // reponse is the variable passed in .data is a function of the response object 
										   //.site is the name of my list of objects. once i loop thru the sites variable i can 
										   //use just the variable in the ng-repeat to call the object variables 



				

	});


	$scope.clearFilter = function() {
		console.log("xxx");
		$scope.acro = {};
	};
	 
});








app.directive("test", function() {
    return {
        templateUrl : 'forms/webform.php'
    };
});


app.controller('teams', function ($scope,$http) {
	// $scope.http  = "HTTP";
	$http.get('http://lmsaccess.com/dashboard/stream/trident_teams.txt').then(function(response){
		


		$scope.teams = response.data.trident_teams; // reponse is the variable passed in .data is a function of the response object 
										   //.site is the name of my list of objects. once i loop thru the sites variable i can 
										   //use just the variable in the ng-repeat to call the object variables 


						for(var key in teams){
							if(k == '1'){
								k.push(items...: any)
							}
						}


				

	});
});