<?php

class Database {

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "electiveweb";
    public $conn = null;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insert ($data) {
        $sql = sprintf("INSERT INTO users (email, password, role, created_at)
        VALUES ('%s', '%s', '%s', '%s')", $data['email'], $data['password'], $data['role'], date('Y-m-d H:i:s'));

        if ($this->conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully')</script>";
            header('Location: http://localhost/ahrve/admin/dashboard.php#!/account');
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

        $this->conn->close();  
    }

    public function login ($data) {
        $sql = sprintf("SELECT * FROM users where email = '%s' AND password = '%s'", $data['email'], $data['password']);
        $data = $this->conn->query($sql);
        if (!empty($result = $data->fetch_row())) {
            session_start();
            $_SESSION['is_login'] = $result[3];
            setcookie('user_info', implode(',', $result));
            if ($result[3] === 'admin') {
                header("Location: http://localhost/ahrve/admin/dashboard.php", true);
            } else if ($result[3] === 'user') {
                header("Location: http://localhost/ahrve/users/view.php", true);
            }
        } else {
            echo '<script>alert("Wrong email/password inputted.")</script>';
        }
    }


    public function deleteData($data) {
        $sql = sprintf("DELETE from users WHERE mem_id_acc = '%d'");
        $data = $this->conn->query($sql);
    }
}

?>
