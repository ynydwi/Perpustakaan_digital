<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user=$id");
if($query) {
    echo '<script>alert("Data berhasil di hapus."); location.href="index.php?page=user";</script>';
}else{
    echo '<script>alert("Data gagal di hapus."); location.href="index.php?page=user";</script>';
}
?>