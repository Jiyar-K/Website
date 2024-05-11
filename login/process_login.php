<?php
// process_login.php

// Retrieve username and password from the form
$username = $_POST["username"];
$password = $_POST["password"];

// Validate username format
if (!preg_match('/@/', $username)) {
    // Redirect back to login page with error message
    header("Location: login.php?error=invalid_username");
    exit();
}

// Extract student number from username
$student_number = "b221210586";

// Check if password matches the student number
if ($password != $student_number) {
    // Redirect back to login page with error message
    header("Location: login.php?error=invalid_password");
    exit();
}
echo $password;
// If both username and password are correct, redirect to welcome page
header("Location: welcome.php?username=" . urlencode($username));
exit();
?>
