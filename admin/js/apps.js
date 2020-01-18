 var app = angular.module("myApp", ["ngRoute"]);

	 

app.config(function($routeProvider) {
    $routeProvider
    .when("/account", {
        templateUrl : 'indexacc.php',
        controller: 'myController2',
    })
    .when("/sensor", {
        templateUrl : './index.php',
        controller: 'myController',
    })

   
});


app.controller("myController", function($scope, $http, $timeout){
	$http.get('select.php').then(function(response){
		$scope.members = response.data;
	});

	$scope.insertData = function(){
		$http.post("insert.php", {station: $scope.station, temperature: $scope.temperature, humidity: $scope.humidity, time1: $scope.time1})
		.then(function(){
			$scope.message = "Successfully Submit!";
			$scope.messageStatus = "alert alert-info";
			$scope.msgBox = true;
			$scope.station = "";
			$scope.temperature = "";
			$scope.humidity = "";
			$scope.time1 = "";
			$timeout(function(){
				$scope.msgBox = false;
			}, 1000);
			$scope.selectData();
		});	
	}
	
	$scope.selectData = function(){
		$http.get('select.php').then(function(response){
			$scope.members = response.data;
		});
	}
		
	$scope.deleteData = function(mem_id){
		$http.post("delete.php", {mem_id: mem_id})
		.then(function(){
			$scope.message = "Successfully Deleted";
			$scope.messageStatus = "alert alert-danger";
			$scope.msgBox = true;
			$timeout(function(){
				$scope.msgBox = false;
			}, 1000);
			$scope.selectData();
		});
	}
	
	$scope.btnInsert = true;
	
	$scope.updateData = function(mem_id){
		$scope.btnUpdate = false;
		$scope.btnInsert = true;
		$http.post("update.php", {mem_id: $scope.mem_id, station: $scope.station, temperature: $scope.temperature, humidity: $scope.humidity, time1: $scope.time1})
		.then(function(response){	
			$scope.station = "";
			$scope.temperature = "";
			$scope.humidity = "";
			$scope.time1 = "";
			$scope.message = "Successfully Updated";
			$scope.messageStatus = "alert alert-success";
			$scope.msgBox = true;
			$timeout(function(){
				$scope.msgBox = false;
			}, 1000);
			$scope.selectData();
		});
	}
	
	$scope.updateBtn = function(mem_id, station, temperature, humidity, time1){
		$scope.btnInsert = false;
		$scope.btnUpdate = true;
		$scope.station = station;
		$scope.temperature = temperature;
		$scope.humidity = humidity;
		$scope.time1 = time1;
		$scope.mem_id = mem_id;
	}
});


app.controller("myController2", function($scope, $http, $timeout){
	$http.get('selectacc.php').then(function(response){
		$scope.userss = response.data;
	});

	$scope.insertData = function(){
		$http.post("insertacc.php", {email: $scope.email, password: $scope.password, role: $scope.role})
		.then(function(){
			$scope.message = "Successfully Submit!";
			$scope.messageStatus = "alert alert-info";
			$scope.msgBox = true;
			$scope.email = "";
			$scope.password = "";
			$scope.role = "";
			$timeout(function(){
				$scope.msgBox = false;
			}, 1000);
			$scope.selectData();
		});	
	}
	
	$scope.selectData = function(){
		$http.get('selectacc.php').then(function(response){
			$scope.userss = response.data;
		});
	}
		
	$scope.deleteData = function(mem_id_acc){
		$http.post("deleteacc.php", {mem_id_acc: mem_id_acc})
		.then(function(){
			$scope.message = "Successfully Deleted";
			$scope.messageStatus = "alert alert-danger";
			$scope.msgBox = true;
			$timeout(function(){
				$scope.msgBox = false;
			}, 1000);
			$scope.selectData();
		});
	}
	
	$scope.btnInsert = true;
	
	$scope.updateData = function(mem_id_acc){
		$scope.btnUpdate = false;
		$scope.btnInsert = true;
		$http.post("updateacc.php", {mem_id_acc: $scope.mem_id_acc, email: $scope.email, password: $scope.password, role: $scope.role})
		.then(function(response){	
			$scope.email = "";
			$scope.password = "";
			$scope.role = "";
			$scope.message = "Successfully Updated";
			$scope.messageStatus = "alert alert-success";
			$scope.msgBox = true;
			$timeout(function(){
				$scope.msgBox = false;
			}, 1000);
			$scope.selectData();
		});
	}
	
	$scope.updateBtn = function(mem_id_acc, email, password, role){
		$scope.btnInsert = false;
		$scope.btnUpdate = true;
		$scope.email = email;
		$scope.password = password;
		$scope.role = role;
		$scope.mem_id_acc = mem_id_acc;
	}
});
