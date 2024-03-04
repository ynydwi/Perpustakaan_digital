<?php
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

$query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus."); location.href="index.php?page=user";</script>';
} else {
    echo '<script>alert("Data gagal dihapus: ' . mysqli_error($koneksi) . '"); location.href="index.php?page=user";</script>';
}

?>