<?php
include('classes/class.pulse.php');
include ('classes/class.sql.php');
echo "</br>";

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo json_encode($arr);

echo "</br></br>";

// ////////////////////////////////////////////////////////

echo "<div>"








//////////////////////////////////////////////////////////








$show = new Sql();

$show->select();
echo "</br></br>";


var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
    $http.get("welcome.htm")
    .then(function(response) {
        $scope.myWelcome = response.data;
    });
});



?>