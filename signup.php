<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="login-style2.css">
</head>
<body>

<div class="container">
    <h2>Signup</h2>
    <form method="POST" action="signup.php">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Sign Up</button>
    </form>
    <div id="message"></div>
    <div class="toggle">Already have an account? <a href="login.php">Login</a></div>
</div>

<?php
// Handle signup logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conn.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert into database
    $sql = "INSERT INTO customer (first_name, last_name, email, phone, password) 
    VALUES ('$firstName', '$lastName', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>document.getElementById('message').textContent = 'You are registered successfully!';</script>";
        echo "<script>setTimeout(() => { window.location.href = 'login.php'; }, 2000);</script>"; // Redirect to login after 2 seconds
    } else {
        echo "<script>document.getElementById('message').textContent = 'Error: " . $conn->error . "';</script>";
    }

    $conn->close();
}
?>
</body>
</html>