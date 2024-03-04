<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$query = mysqli_query($koneksi, "DELETE FROM ulasan_buku WHERE id_ulasan=$id");

if ($query) {
    echo '<script>alert("Data berhasil dihapus."); location.href="index.php?page=ulasan";</script>';
} else {
    echo '<script>alert("Data gagal dihapus. Error: ' . mysqli_error($koneksi) . '"); location.href="index.php?page=ulasan";</script>';
}

?>