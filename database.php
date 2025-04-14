<?php

$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "hms_db";
$conn = "";

try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_password,
        $db_name
    );
} catch (mysqli_sql_exception $e) {
    echo "Connection failed. Error: " . $e->getMessage();
}

if ($conn) {
    echo "Connected successfully";
} 


