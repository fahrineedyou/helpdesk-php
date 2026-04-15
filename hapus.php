<?php
include 'koneksi.php'; // Hubungkan ke database

// Ambil ID dari URL
$id = $_GET['id'];

// Query hapus data
$query = "DELETE FROM pengaduan WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    // Jika berhasil, kembali ke halaman utama
    header("location:index.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}
?>