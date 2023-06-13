<?php
include "config/connection.php";

if(isset($_POST['submit'])){
    $radio1 = $_POST['website_review'];
    $radio2 = $_POST['qof_review'];
    $radio3 = $_POST['servers_review'];
    $radio4 = $_POST['time_spent'];
    $radio5 = $_SESSION['username'];
    $radio6 = $_POST['comment'];

    if(empty($radio5)){
        echo "<script>alert('You must login to leave a review.')".$_SESSION['username']."</script>";
    }
    // ini utk cek, tiap radio atau input type ada diisi ato nda
    if(empty($radio1) || empty($radio2) || empty($radio3) || empty($radio4) || empty($radio6)) {
        // kalo ada yg ndak isi, muncul alert
        
        echo "<script>location.href = 'review.php'; alert('You need to fill all fields');</script>";

        exit(); // ndak lanjut eksekusi kode
    }

    $sql = "INSERT INTO review (website_review, servers_review, quality_information, time_spent, username, comment) VALUES ('$radio1','$radio2','$radio3','$radio4','$radio5','$radio6')";

    if (mysqli_query($con, $sql)) {

    } else {
        echo "Terjadi kesalahan saat memasukkan data ke dalam database: " . mysqli_error($con);
    }
}
?>
<script>
    alert("Review Submitted");
    location.href = "review.php";
</script>
