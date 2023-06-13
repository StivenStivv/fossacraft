<?php
include "config/connection.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$sql = "INSERT INTO `tbuser` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');";
$query = mysqli_query($con,$sql);

echo "<a href='userregister.php'>Back</a><br><br>";
echo "Your account successfully registered, you'll soon be contacted on Discord for authorization of this account"
?>