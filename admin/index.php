
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
		<link rel = "stylesheet" href="../assets/css/style.css">
		
<body ng-app="myApp" ng-controller = "myController">
	<div class = "col-md-6 "></div>
	<div class = "col-md-9 well index-form">
		<div style="margin-left:30%;">
		<h3 class = "text-primary">PROOF SA WALAY TULOG SIR</h3>
		<image src="1.png" style="width: 30%;" > <image src="2.png" style="width: 30%;" >
		<hr style = "border-top:1px dotted #ccc;">
		</div>
		<form>
			<div class = "form-inline">
				<label>station</label>
				<input type = "text" class = "form-control" ng-model = "station" id = "station"/>
				<label>temperature</label>
				<input type = "text" class = "form-control" ng-model = "temperature" id = "temperature"/>
				<label>Humidity</label>
				<input type = "text" class = "form-control" ng-model = "humidity" id = "humidity"/>
				<label>Time</label>
				<input type = "text" class = "form-control" ng-model = "time1" id = "time1"/>

				<button type = "button" class = "btn btn-primary form-control" ng-show = "btnInsert" ng-click = "insertData()"><span class = "glyphicon glyphicon-save"></span> Submit</button>
				<button type = "button" class = "btn btn-warning form-control" ng-show = "btnUpdate" ng-click = "updateData()"><span class = "glyphicon glyphicon-edit"></span> Update</button>
				<br /><br />
				<div ng-model = "message" ng-show = "msgBox" class = "{{messageStatus}}">{{message}}</div>
			</div>
		</form>
		<br />
		<table class = "table table-responsive table-bordered alert-warning">
			<thead>
				<tr>
					<th>station</th>
					<th>temperature</th>
					<th>Humidity</th>
					<th>Time</th>

					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat = "datas in members">
					<td>{{datas.station}}</td>
					<td>{{datas.temperature}}</td>
					<td>{{datas.humidity}}</td>
					<td>{{datas.time1}}</td>


					<td><center><button type = "button" ng-click = "updateBtn(datas.mem_id, datas.station, datas.temperature, datas.humidity, datas.time1)" class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span></button> <button type = "button" ng-click = "deleteData(datas.mem_id);" class = "btn btn-danger"><span class = "glyphicon glyphicon-remove"></span></button></center></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>	