<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran=$id");
if($query) {
    echo '<script>alert("Data berhasil di hapus."); location.href="index.php?page=history";</script>';
}else{
    echo '<script>alert("Data gagal di hapus."); location.href="index.php?page=history";</script>';
}
?>