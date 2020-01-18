<?php
    require ('../config/config.php');
    $conn = new Database();
    $users = $conn->getUsers();
    $update = $conn->updateBtn();
    $delete = $conn->deleteData();
    if (!empty($_POST)) {
        $conn->insert($_POST);
    }
?>


<html lang="en" ng-app="myApp">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assets/css/style.css" crossorigin="anonymous">
    

    <title>Register</title>
  </head>
  <body ng-controller="myController2">
    <div class="manage-container">
      <div class="container-fluid register">
          <h1 class="manage">PAPASARA MI TAWN SIR</h1>
          <div class="row">
              <div class="manage">
                  <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="form-group">

                          <label for="exampleInputEmail1" class="manage-label">
                              Email address
                          </label><br>
                          <input type="email" name="email" class="manage-input" id="exampleInputEmail1"/>
                      </div>
                      <div class="form-group">

                          <label for="exampleInputPassword1" class="manage-label">
                              Password
                          </label> <br>
                          <input type="password" name="password" class="manage-input" id="exampleInputPassword1"/>
                      </div>
                      <div class="form-group">

                          <label for="exampleInputFile" class="manage-label">
                              Role
                          </label>
                          <input type="role" name="role" class="manage-input" id="exampleInputFile"/>
                      </div>
                      <button type="submit" class="manage-btn submit">
                          Submit
                      </button>
                  </form>
              </div>
          </div>
      </div>
      
        <table class="manage-table">
          <tr>
              <td class="manage-td td-color">ID</td>
              <td class="manage-td td-color">Email</td>
              <td class="manage-td td-color">Password</td>
              <td class="manage-td td-color">Type</td>
              <td class="manage-td td-color"></td>
          </tr>
          <?php
          if (!empty($users)) {
              foreach ($users as $user) {
                  echo "<tr>";
                    echo "<td class='manage-td'>{$user[0]}</td>";
                    echo "<td class='manage-td'>{$user[1]}</td>";
                    echo "<td class='manage-td'>{$user[2]}</td>";
                    echo "<td class='manage-td'>{$user[3]}</td>";
                    echo "<td class='manage-td'><button type = 'button' value = '$user[0], $user[1], $user[2], $user[3])' >Edit</button> <button type = 'button' value = '$user[0]'>Delete</button>";
                  echo "</tr>";
              }
          }
          ?>
      </table>S
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

