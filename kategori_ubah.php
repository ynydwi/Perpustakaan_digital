<?php
$id = $_GET['id'];
if(isset($_POST['nama_kategori'])){
     
    $nama_kategori = $_POST['nama_kategori'];

    $query = mysqli_query($koneksi, "UPDATE kategori_buku SET nama_kategori='$nama_kategori' WHERE id_kategori=$id");

    if($query){
        echo '<script>alert("Ubah data Berhasil"); location.href="kategori.php";</script>';
    }else{
        echo '<script>alert("Ubah data Gagal")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM kategori_buku WHERE id_kategori=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data kategori</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    <a href="?page=kategori" class="btn btn-primary">Kembali</a>
                                    <hr>
                                    <form action="" method="post">
                                        <table>
                                            <tr>
                                                <td width="200">Nama kategori</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" value="<?php echo $data['nama_kategori']; ?>" type="text" name="nama_kategori"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><button class="btn btn-success" type="submit">Simpan</button></td>
                                            </tr>
                                        </table>
                                    </form>
								</div>
							</div>
						</div>
					</div>