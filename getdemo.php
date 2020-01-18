<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electiveweb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");

    if(!empty($_GET['station']) && !empty($_GET['temperature']) && !empty($_GET['humidity']))
    {
    	$station = $_GET['station'];
        $temperature = $_GET['temperature'];
        $humidity = $_GET['humidity'];

	    $sql = "INSERT INTO datas (station, temperature, humidity, time1)
		
		VALUES ('".$station."', '".$temperature."', '".$humidity."', '".$d." / ".$t."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


	$conn->close();
?>
