<?php
include "config/connection.php";

// Cek apakah parameter ID ada
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // Hapus data review berdasarkan ID
    $deleteSql = "DELETE FROM tbuser WHERE username = '$username'";
    if ($con->query($deleteSql) === TRUE) {
        echo "<script>alert('User data has been deleted');</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat menghapus data review: " . $con->error . "');</script>";
    }
}

// Redirect kembali ke halaman dashboard
echo "<script>window.location.href = 'dashboard.php';</script>";
exit();
?>
