<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "Project_DB";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
