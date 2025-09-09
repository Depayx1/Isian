<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST["username"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM users WHERE username='$username' OR email='$email'");
    if ($check->num_rows > 0) {
        echo "<script>alert('Username atau email sudah digunakan!'); window.location='register.html';</script>";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registrasi berhasil, silakan login!'); window.location='login.html';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
