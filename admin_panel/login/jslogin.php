<?php
session_start();
require_once 'config.php';

if (isset($_POST['login'])) {
    $password = $_POST['pwd'];

        $query = "SELECT * FROM admin_key WHERE password='$password'";
        $result = mysqli_query($conn, $query);
        
        $row = mysqli_fetch_array($result);


        if (mysqli_num_rows($result) > 0) {
            $_SESSION['adminlogin'] = $row;
            header("location: ../");
        }

        else {
            echo "<script>alert('PASSWORD INCORRECT PLEASE INSERT CORRECT PASSWORD')</script>";
        }


}




// if (isset($_POST['login'])) {
//     $password = $_POST['pwd'];

//         $sql = mysqli_query($conn, "SELECT count(*) AS total FROM admin_key WHERE password='".$password."'") or die(mysqli_error($conn));
        
//         $row = mysqli_fetch_array($sql);

//         if ($row['total'] > 0) {
//             $_SESSION['adminlogin'] = $row;
//             header("location: ../");
//         }

//         else {
//             echo "<script>alert('PASSWORD INCORRECT PLEASE INSERT CORRECT PASSWORD')</script>";
//         }


// }