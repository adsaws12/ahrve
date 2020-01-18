<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="5">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
<style>
#c4ytable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#c4ytable td, #c4ytable th {
    border: 1px solid #ddd;
    padding: 8px;
}

#c4ytable tr:nth-child(even){background-color: #f2f2f2;}

#c4ytable tr:hover {background-color: #ddd;}

#c4ytable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #00A8A9;
    color: white;
}
</style>

<?php
    //Connect to database and create table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electiveweb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
        echo "<a href='install.php'>If first time running click here to install database</a>";
    }
?> 


<div id="cards" class="cards">

<?php 
    session_start();
     if (!empty($_SESSION['message'])) {
            echo "<script>alert('".$_SESSION['message']."')</script>";
            $_SESSION['message'] = null;
        }
    // var_dump(explode(',', $_COOKIE['user_info'])[1]);
    // die;
    if (empty($_SESSION['is_login'])) {
        $_SESSION['message'] = 'Login sa choi';
        // var_dump($_SESSION); die;
        header('Location: http://localhost/ahrve/index.php');
    } else if ($_SESSION['is_login'] == 'admin') {
      $_SESSION['message'] = 'AYAW NA LAGEH OG PANGITA OG LAIN';
        header('Location: http://localhost/ahrve/admin/dashboard.php');
    }

   

    $sql = "SELECT * FROM datas ORDER BY mem_id DESC";
    if ($result=mysqli_query($conn,$sql))
    {
      echo "<button class='logout'>LogOut</button>";
      // Fetch one and one row
      echo "<TABLE id='c4ytable'>";
      echo "<TR><TH>Station</TH><TH>Temperature</TH><TH>Humidity</TH><TH>Time</TH></TR>";
      while ($row=mysqli_fetch_row($result))
      {
        echo "<TR>";
        echo "<TD>".$row[1]."</TD>";
        echo "<TD>".$row[2]."</TD>";
        echo "<TD>".$row[3]."</TD>";
        echo "<TD>".$row[4]."</TD>";
        echo "</TR>";
      }
      echo "</TABLE>";
      // Free result set
      mysqli_free_result($result);
    }

    mysqli_close($conn);
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
          window.location.href = 'view.php';
        }
    });
  });
</script>
</body>
</html>
