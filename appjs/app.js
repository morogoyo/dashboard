var app = angular.module('lmsTools', []);

		
app.controller('testCTRL', function($scope){
	$scope.name = "Rene";

});


app.controller('sites', function ($scope,$http) {
	$scope.http  = "HTTP";
	$http.get('http://lmsaccess.com/dashboard/forms/websites.txt').then(function(response){
		


		$scope.sites = response.data.websites; // reponse is the variable passed in .data is a function of the response object 
										   //.site is the name of my list of objects. once i loop thru the sites variable i can 
										   //use just the variable in the ng-repeat to call the object variables 
				

	});
	 
});



app.controller('acronyms', function ($scope,$http) {
	$scope.http  = "HTTP";
	$http.get('http://lmsaccess.com/dashboard/forms/acronym.txt').then(function(response){
		


		$scope.acronym = response.data.acronym; // reponse is the variable passed in .data is a function of the response object 
										   //.site is the name of my list of objects. once i loop thru the sites variable i can 
										   //use just the variable in the ng-repeat to call the object variables 
				

	});
	 
});