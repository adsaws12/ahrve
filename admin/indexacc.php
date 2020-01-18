
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
		<link rel = "stylesheet" href="../assets/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
		<style>
			.formindexacc {
			  justify-content: center;
			  display: flex;
			  flex-direction: column;
			  justify-content: center;
			  width: 30%;
			  margin: 0 auto;
			  border:4px solid gray;
			  padding: 10px;
			  background:#333;
			  border-radius: 10px;
			}
			.inputindexacc {
			  width: 70%;
			}
			.btnindexacc {
				margin-top: 10px;
				width: 40%;
			}
			.label1 {
				color: #fff;
			}
			.header1 {
				background:#26c6da;
			}
		</style>
<body ng-app="myApp2" ng-controller = "myController2">
	<div class = "col-md-6 "></div>
	<div class = "col-md-9 well index-form">
		
		<form class="formindexacc">
			<div class="header1">
				<h3 class = "text-primary text-white" style="padding: 10px;">PAPASARA TAWN MI SIR KAY WALA MI TULOG</h3><h5>REGISTER</h5>
			</div>
			<hr style = "border-top: 2px solid #fff;">
			
			<div>
				<label class="label1">email</label>
				<input type = "text" class = "form-control inputindexacc" ng-model = "email" id = "email"/>
				<label class="label1">password</label>
				<input type = "text" class = "form-control inputindexacc" ng-model = "password" id = "password"/>
				<label class="label1">role</label>
				<input type = "text" class = "form-control inputindexacc" ng-model = "role" id = "role"/>

				<button type = "button" class = "btn btn-primary form-control btnindexacc" ng-show = "btnInsert" ng-click = "insertData()"><span class = "glyphicon glyphicon-save"></span> Submit</button>
				<button type = "button" class = "btn btn-warning form-control btnindexacc" ng-show = "btnUpdate" ng-click = "updateData()"><span class = "glyphicon glyphicon-edit"></span> Update</button>
				<br /><br />
				<div ng-model = "message" ng-show = "msgBox" class = "{{messageStatus}}">{{message}}</div>
			</div>
		</form>
		<br />
		<table class = "table table-responsive table-bordered alert-warning">
			<thead>
				<tr>
					<th>email</th>	
					<th>password</th>
					<th>role</th>

					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat = "users in userss">
					<td>{{users.email}}</td>
					<td>{{users.password}}</td>
					<td>{{users.role}}</td>


					<td><center><button type = "button" ng-click = "updateBtn(users.mem_id_acc, users.email, users.password, users.role)" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span></button> <button type = "button" ng-click = "deleteData(users.mem_id_acc);" class = "btn btn-danger"><span class = "glyphicon glyphicon-remove"></span></button></center></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>	
