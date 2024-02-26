<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kategori_buku WHERE id_kategori=$id");
if($query) {
    echo '<script>alert("Data berhasil di hapus."); location.href="index.php?page=kategori";</script>';
}else{
    echo '<script>alert("Data gagal di hapus."); location.href="index.php?page=kategori";</script>';
}
?>