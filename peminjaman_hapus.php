<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus."); location.href="index.php?page=history";</script>';
} else {
    echo '<script>alert("Data gagal dihapus: ' . mysqli_error($koneksi) . '"); location.href="index.php?page=history";</script>';
}

?>