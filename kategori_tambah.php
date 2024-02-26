<?php
if(isset($_POST['nama_kategori'])){
     
    $nama_kategori = $_POST['nama_kategori'];

    $query = mysqli_query($koneksi, "INSERT INTO kategori_buku (nama_kategori) values('$nama_kategori')");

    if($query){
        echo '<script>alert("Tambah data Kategori Berhasil"); location.href="kategori.php";</script>';
    }else{
        echo '<script>alert("Tambah data kategori Gagal")</script>';
    }
}
?>

<h1 class="h3 mb-3">Tambah Data kategori</h1>

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
                                                <td><input class="form-control" type="text" name="nama_kategori"></td>
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