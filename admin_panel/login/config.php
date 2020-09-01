<?php 

$host_name = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "portfolio";

$conn = mysqli_connect($host_name, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}