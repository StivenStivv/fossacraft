<?php
include "config/connection.php";

$image = $_POST['image'];
$description = $_POST['description'];

$sql = "INSERT INTO activity (image, description) VALUES (\"$image\", \"$description\")";
$query = mysqli_query($con,$sql);

echo "Image successfully uploaded";
echo $image;
echo $description;
// header("location:add_activity.php");
?>