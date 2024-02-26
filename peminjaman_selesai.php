<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "UPDATE peminjaman set status_peminjaman='DiKembalikan' WHERE id_peminjaman=$id");
if($query) {
    echo '<script>alert("Berhasil dikonfirmasi."); location.href="?page=peminjaman";</script>';
}
?>