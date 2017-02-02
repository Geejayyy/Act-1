var app = angular.module('myjj', []);
	app.controller('control', function($scope, $http) {
		
	$scope.callData = function(){
		$http.get("http://127.0.0.1/Act/get.php")
		.then(function(success) {
			$scope.persons = success.data;	
			
		},
		function(error){
			console.log(error);
		}
		);
	}

$scope.put = function(){
      let url = "http://127.0.0.1/Act/put.php";
	let data = $.param({
        First: $scope.fName,
        Last : $scope.lName,
        Gender: $scope.gen,
        Date : $scope.date
     }); 
	
	let config = {
        headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                  }
     }
	
	$http.post(url, data, config )
           .then(
              function(response){
               console.log(response);
               $scope.callData();
            }, 
              function(response){
                console.log(response);
            }
        );
      
	}


	$scope.callUser = function(){
 	 $http.get("http://127.0.0.1/Act/scripts/data.php")
        .then(
          function (success){
             $scope.persons = success.data;
           },
           function (error){
            console.log("Failed!.");
          }
        ); 
	 }
});