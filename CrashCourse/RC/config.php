<?php
session_start();

$servername = "10.177.202.26";
//$servername = "192.168.1.106";
$username = "RC";
$password = "RC";
$dbname = "RC";
$errorCaught = false;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $errorCaught = true;
    echo "Error: " . $e->getMessage();
}

if (!$errorCaught) {
    // This is for debugging purposes only.
//    echo "Database connection configured correctly, and database connection good.";
}

//$conn = null;
?>