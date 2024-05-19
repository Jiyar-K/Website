<?php
// process_login.php

// Check if the username and password are set and not empty
if (empty($_POST["username"]) || empty($_POST["password"])) {
    // Redirect back to login page with error message for empty fields
    header("Location: index.php?error=empty_fields");
    exit();
}

// Retrieve username and password from the form
$username = $_POST["username"];
$password = $_POST["password"];

// Validate username format
if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    // Redirect back to login page with error message
    header("Location: index.php?error=invalid_email");
    exit();
}

// Extract student number from username
$student_number = "b221210586";
$student_email = "b221210586@sakarya.edu.tr";
// Check if password matches the student number
if ($password != $student_number || $username != $student_email) {
    // Redirect back to login page with error message
    header("Location: index.php?error=invalid_email or password");
    exit();
}

// If both username and password are correct, redirect to welcome page
header("Location: welcome.php?username=" . urlencode($username));
exit();
?>
