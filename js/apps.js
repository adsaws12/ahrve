var app = angular.module("myModule", [])
				.controller("myController", function($scope, $http, $timeout){

					$http.get('select.php').then(function(response){
						$scope.members = response.data;
					});
					
					$scope.insertData = function(){
						$http.post("insert.php", {firstname: $scope.firstname, lastname: $scope.lastname, humidity: $scope.humidity, time1: $scope.time1})
						.then(function(){
							$scope.message = "Successfully Submit!";
							$scope.messageStatus = "alert alert-info";
							$scope.msgBox = true;
							$scope.firstname = "";
							$scope.lastname = "";
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
						$http.post("update.php", {mem_id: $scope.mem_id, firstname: $scope.firstname, lastname: $scope.lastname, humidity: $scope.humidity, time1: $scope.time1})
						.then(function(response){	
							$scope.firstname = "";
							$scope.lastname = "";
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
					
					$scope.updateBtn = function(mem_id, firstname, lastname){
						$scope.btnInsert = false;
						$scope.btnUpdate = true;
						$scope.firstname = firstname;
						$scope.lastname = lastname;
						$scope.humidity = humidity;
						$scope.time1 = time1;
						$scope.mem_id = mem_id;
					}
				});