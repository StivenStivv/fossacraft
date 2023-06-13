<?php
include "config/connection.php";

// Cek apakah parameter ID ada
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data review berdasarkan ID
    $deleteSql = "DELETE FROM review WHERE id = '$id'";
    if ($con->query($deleteSql) === TRUE) {
        echo "<script>alert('Data review berhasil dihapus.');</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat menghapus data review: " . $con->error . "');</script>";
    }
}

// Redirect kembali ke halaman dashboard
echo "<script>window.location.href = 'dashboard.php';</script>";
exit();
?>
