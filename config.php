<?php
$db_host = "localhost";
$username = "xxx";
$password = "xxx";
$db_name = "xxx";

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>