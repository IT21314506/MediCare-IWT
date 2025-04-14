<?php

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "hmsdb";
$conn = "";

$connection = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {

    die("Failed to connect to MySQL: " . mysqli_connect_error());

} else {
    // echo "Connected successfully";
}


?>