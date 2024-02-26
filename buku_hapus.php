<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
if($query) {
    echo '<script>alert("Data berhasil di hapus."); location.href="kategori.php";</script>';
}else{
    echo '<script>alert("Data gagal di hapus."); location.href="kategori.php";</script>';
}
?>