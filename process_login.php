<?php
session_start();
include("connect1.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    $query = "SELECT id FROM users WHERE username ='$username' AND pass='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); 
    } else {
        header("Location: invalid.php"); 
    }
}
?>
