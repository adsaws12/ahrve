<?php
// session_start();
// var_dump($_SESSION);
// die;
    if (!empty($_POST)) {
        require ('./config/config.php');

        $conn = new Database();

        $conn->login($_POST);
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" crossorigin="anonymous">
    
    <title>Login</title>
    <style >
      .bodylogin {
        background:linear-gradient(rgba(0, 0, 0 ,0.5),rgba(0,0,0,0.5)),url('10.gif');
        background-repeat: no-repeat;
        background-size: cover;
      }
      .labelindex {
        color: #fff;
      }
      .whole {
        border:2px solid red;
      }
    </style>
  </head>
  <body class="bodylogin">
      <div class="whole">
        <h1><?php
        session_start();
          if (!empty($_SESSION['message'])) {
            echo "<script>alert('".$_SESSION['message']."')</script>";
            $_SESSION['message'] = null;
        }
        ?></h1>
          <h1 class="text-info">SIR MALOUY</h1>
          <div class="row">
              <div class="col-md-4">
                  <form role="form" method="post">
                      <div class="form-group">
                          <label for="exampleInputEmail1" class="labelindex">
                              Email address
                          </label>
                          <input type="email" name="email" class="form-control log" id="exampleInputEmail1"/>
                      </div>
                      <div class="form-group">

                          <label for="exampleInputPassword1" class="labelindex">
                              Password
                          </label>
                          <input type="password" name="password" class="form-control log" id="exampleInputPassword1"/>
                      </div>
                      <div class="allbtn">
                        <button type="submit" class="btn btn-primary" class="labelindex">
                          Submit
                      </button>
                      <button type="cancel" class="btn btn-danger" class="labelindex">
                          Cancel
                      </button></div>
                      
                  </form>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

