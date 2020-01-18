

<html ng-app="myApp">
<head>
	<title>Shape Calculator</title>
	<!-- <link rel="stylesheet" href="css/style1.css"> -->

	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- <script src = "js/angular.js"></script>
	<script src = "./js/apps.js"></script> -->
	<!-- <script src="js/apps.js"></script> -->
    <style>
    	.dashboardbtn {
		  margin: 20px 0 -40px 80px;
		  width: 80px;
	      height: 60px;
		}
		.dashboardheader {
		  font-size: 60px;
		  margin: 0 auto;
		  width: 35%;
		}
    </style>
	
</head>

<body>
	<div class="dashboardheader"> <span class="all">Kaloy An<span class="orange">Mo KAMI </span></div>
		
			<div class="sidebar-menu">
				<button type="button" class="btn btn-info dashboardbtn" data-toggle="collapse" data-target="#demo">MENU</button>
  
				<div div id="demo" class="collapse">
					<ul><br><br>
					<li><a href="#!account">Manage Account</a></li><br>
					<li><a href="#!sensor">Manage Sensor</a></li><br>
					<button class="logout">LogOut</button>
					</ul>
				</div>
			</div>
			<div ng-view></div>
		
</body>

<script src="./js/apps.js">
</script>

<?php
	session_start();

       if (!empty($_SESSION['message'])) {
            echo "<script>alert('".$_SESSION['message']."')</script>";
            $_SESSION['message'] = null;
        }
        
	if (empty($_SESSION['is_login'])) {
        $_SESSION['message'] = 'Login sa choi';
        header('Location: http://localhost/ahrve');
    } else if ($_SESSION['is_login'] == 'user') {
    	$_SESSION['message'] = 'POBRE RATA DLI TA PARA NIYA';
        header('Location: http://localhost/ahrve/users/view.php');
    }


?>
<script>
	$(document).ready(function(){
	  $(".logout").click(function(){
	    // confirm("You sure nga mo logout jd ka? dli naka kita sa akong ka gwapo.");
	      var txt;
			  var r = confirm("You sure nga mo logout jd ka? dli naka kita sa akong ka gwapo.");
			  if (r == true) {
			     window.location.href = '../logout.php';
			  } else {
			    window.location.href = 'dashboard.php';
			  }
	  });
	});
</script>
</html>