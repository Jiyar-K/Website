<?php
// welcome.php

// Check if username is set in URL parameters
if (isset($_GET["username"])) {
    $username = $_GET["username"];
    // Extract student number from username
    $student_number = "b221210586";
    echo "<h2>Welcome, $student_number!</h2>";
} else {
    // If username is not set, redirect back to login page
    header("Location: login.php");
    exit();
}
?>
