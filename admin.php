<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: home.php");
    exit();
}

// Admin content here
echo "<h1>Welcome to the Admin Page, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
echo "<p><a href='admin_logout.php'>Logout</a></p>";
?>