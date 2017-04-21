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



app.directive("team", function() {

    return {
        templateUrl : 'forms/webform.php'
    };
});


app.controller('teams', function ($scope,$http) {
	
	$http.get('http://lmsaccess.com/dashboard/stream/trident_teams.txt').then(function(response){
		
// 
// $scope.http  = "HTTP";
		$scope.teams = response.data.trident_teams; // reponse is the variable passed in .data is a function of the response object 
										   //.site is the name of my list of objects. once i loop thru the sites variable i can 
										   //use just the variable in the ng-repeat to call the object variables 


	// var testval=["medallion","guess_compass","crew_compass","hardware","xibiometrics","xilock","xiportal","xireader","ocean_light","xisensor","xiconnect","xiidentity","xiintel","xilocate","ximaximizer","xiorchestrate","xipersonalizer","xisocial","xiengage","ximessaging","xiship","xidestination","xifolio","xientitlements","xisynchronize","xibridge","xicms","xicommerce","xioms","xidata","xideploy","xifulfill","xiintegrate","xilodging","xiseating","werq","polar_reservations","crunchtime_inventory","cms-drupal","hr_maps","fleet_ops-neptune"];
			
				
				// for(var i =0 ; i < $scope.teams.length; i++){
	   //           	for (var j = 0; j < testval.length; j++) { 
	                    
		  //              if($scope.teams[i][testval[j]] == '1'){
		  //                   $scope.teams[i][testval[j]] = testval[j];                
		  //                     }else{
		  //                       delete $scope.teams[i][testval[j]];
		  //                     }
		  //           }
	   //         	} 
	           	console.log($scope.teams);
	           
	           // return $scope.teams ;
	       
				

	});
});


app.controller('releaseCtrl',  function ($scope,$http) {

	$http.get('http://lmsaccess.com/dashboard/stream/release_management.txt').then(function (response) {
		$scope.release = response.data.release;
			console.log($scope.release);
	});
	
});