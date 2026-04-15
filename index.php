<?php
include 'koneksi.php'; // Mengambil kabel koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $laporan = $_POST['laporan'];

    // Perintah untuk memasukkan data ke tabel pengaduan
    $query = "INSERT INTO pengaduan (nama, laporan) VALUES ('$nama', '$laporan')";

    if (mysqli_query($conn, $query)) {
        echo "<div style='color: green;'><b>Sukses!</b> Laporan berhasil disimpan ke database.</div>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pengaduan - Helpdesk</title>
</head>
<body>
    <h1>Kirim Laporan Pengaduan</h1>
    <form>
        <label>Nama Anda:</label><br>
        <input type="text" name="nama" placeholder="Masukan nama..."><br><br>

        <label>Isi Laporan:</label><br>
        <textarea name="laporan" placeholder="Tulis kendala Anda di sini.."></textarea><br><br>

        <button type="submit">Kirim Sekarang</button>
    </form>
</body>
</html>