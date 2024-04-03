<?php
session_start(); // Start session if not already started

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page or any other page
header('Location: ./login');
exit();
?>