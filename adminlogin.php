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
    <form method="POST" action="adminlogin.php"> <!-- Action points back to the same file -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required> <!-- Correct input type -->
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
      
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
        <div id="message"></div>
    <div class="toggle">Back to the previous page? <a href="home.php">home</a></div>
    </form>
</div>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch submitted values
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if credentials match the predefined admin credentials
    if ($username === 'admin' && $email === 'admin@gmail.com' && $password === 'admin123') {
        // If credentials are correct, set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to admin page
        header("Location: admin/access/index.php");
        exit();
    } else {
        // Credentials are incorrect
        echo "<script>document.getElementById('message').textContent = 'You are not authorized to access this page. Please try again.';</script>";
        exit();
    }
}

?>

</body>
</html>