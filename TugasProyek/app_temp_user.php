<?php
include "config/connection.php";

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "SELECT username, email, password FROM tbuser WHERE username='$username'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $password = $row['password'];
    $username = $row['username'];

    $sqlapp = "INSERT INTO tbuser_app (username, email, password) VALUES ('$username','$email','$password')";
    $resultapp = $con->query($sqlapp);
    $sqldel = "DELETE FROM tbuser WHERE username = '$username'";
    $resultdel = $con->query($sqldel);
    ?>
    <script>
        location.href = 'dashboard.php';
        alert('account approved');
    </script>
<?php
}
?>

