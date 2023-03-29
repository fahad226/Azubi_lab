Name the form login.php

<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve the username and password from the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are valid
    if ($username === 'fahad' && $password === 'password123') {
        // Display a welcome message if login is successful
        echo '<div style="background-color: #7FFF7F; color: #333; padding: 10px;">Welcome, This is admin!</div>';
    } else {
        // Display an error message if login fails
        $error = "Invalid username or password";
        echo '<div style="background-color: #FF7F7F; color: #FFF; padding: 10px;">' . $error . '</div>';
    }
}
?>