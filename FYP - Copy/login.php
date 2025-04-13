<?php
session_start();
include 'connect.php'; // استدعاء ملف الاتصال

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // بيانات الدخول صحيحة
            $_SESSION['username'] = $username;
            echo "Login successful.";
            exit(); // إنهاء السكربت بعد النجاح
        } else {
            echo "Error: Incorrect password.";
        }
    } else {
        echo "Error: Username not found.";
    }

    $stmt->close();
}
$conn->close();
?>