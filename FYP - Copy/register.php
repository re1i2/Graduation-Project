<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verificationPassword = $_POST['verificationpassword'];

    // التحقق من كلمة المرور
    if (!preg_match('/[A-Z]/', $password)  
        || !preg_match('/[a-z]/', $password)  
        || !preg_match('/[0-9]/', $password)  
        || !preg_match('/[\W_]/', $password)  
        || strlen($password) < 8) {
        echo "Password must be at least 8 characters long and include uppercase letters, lowercase letters, numbers, and symbols.";
        exit();
    }

    // التحقق من تطابق كلمتي المرور
    if ($password !== $verificationPassword) {
        echo "Passwords do not match.";
        exit();
    }

    // التحقق مما إذا كان اسم المستخدم موجوداً
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username already exists.";
    } else {
        // التحقق مما إذا كان البريد الإلكتروني موجوداً
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "The email already exists.";
        } else {
            // إضافة مستخدم جديد
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // لتأمين كلمة المرور
            $stmt->bind_param("sss", $username, $email, $hashedPassword);

            if ($stmt->execute()) {
                // إعادة التوجيه إلى home.html بعد التسجيل بنجاح
                header("Location: home.html");
                exit();
            } else {
                echo "Registration error: " . $stmt->error;
            }
        }
    }

    $stmt->close();
    $conn->close();
}
?>