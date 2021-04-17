<?php
// This file is a placeholder and should be modified to fit your pre-existing authentication system. Simply check if the user is signed in, and redirect them if they either aren't signed in, or the username isn't a username you trust.


session_start(); 
if (isset($_SESSION['loggedin'])) { 
    $username = $_SESSION['username']; 
} else { 
    header("Location: /login.php"); 
    exit(); 
}
if ($username !== "cvieira") {
    echo "<p>Error: You don't have permission to be here.</p>";
    exit(); 
}
?>
