<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login-style2.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form method="POST" action="login.php">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    <div id="message"></div>
    <div class="toggle">Don't have an account? <a href="signup.php">Sign Up</a></div>
</div>

<?php
session_start();
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customer WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['customer_id'] = $row['id'];
            header("Location: home.php");
            exit();
        } else {
            echo "<script>document.getElementById('message').textContent = 'Invalid password.';</script>";
        }
    } else {
        echo "<script>document.getElementById('message').textContent = 'No user found with that email.';</script>";
    }
    $conn->close();
}
?>
</body>
</html>