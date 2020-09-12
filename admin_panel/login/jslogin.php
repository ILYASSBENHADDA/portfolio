<?php
session_start();
require_once 'config.php';

if (isset($_POST['login'])) {
    $password = $_POST['pwd'];

        $query = "SELECT * FROM admin_key";
        $result = mysqli_query($conn, $query);
        

        if ($row=mysqli_fetch_array($result)) {
            $db_password = $row['password'];

            if(md5($password) == $db_password) {
                $_SESSION['adminlogin'] = $row;
                header("location: ../");
            }
            else {
                echo "<script>alert('PASSWORD INCORRECT PLEASE INSERT CORRECT PASSWORD')</script>";
            }
        }

}