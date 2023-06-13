<?php
include "config/connection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = "select * from tbuser_app where username ='$username' and password='$password'";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
$result = mysqli_fetch_array($query);

if($num==0){
    echo "Login Failed";
}else{
    $_SESSION["username"]=$username;
    ?>
        <script>
            location.href = 'index.php';
        </script>
    <?php
}
?>