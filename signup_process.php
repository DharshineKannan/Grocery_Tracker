<?php
include("connect1.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = "INSERT INTO users (username, pass, email) VALUES ('$username', '$password', '$email')";
    if (mysqli_query($conn, $query)) {
        header("Location: signup.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
