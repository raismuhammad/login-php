<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "github");

//ketika button login diklik
if( isset($_POST["login"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    header("Location: signin.html");
}
?>