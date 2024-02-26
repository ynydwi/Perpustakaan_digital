<?php
$id = $_GET['id'];
if(isset($_POST['judul'])){
     
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];

    $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul',penulis='$penulis', penerbit='$penerbit',tahun_terbit='$tahun_terbit',stok='$stok' WHERE id_buku=$id");

    if($query){
        echo '<script>alert("Ubah data Berhasil"); location.href="buku.php";</script>';
    }else{
        echo '<script>alert("Ubah data Gagal")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM buku WHERE id_buku=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Ubah Data buku</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    <a href="?page=buku" class="btn btn-primary">Kembali</a>
                                    <hr>
                                    <form action="" method="post">
                                        <table>
                                            <tr>
                                                <td width="200">Nama buku</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">penulis</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="penulis"  value="<?php echo $data['penulis']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">penerbit</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="penerbit"  value="<?php echo $data['penerbit']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Tahun terbit</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="tahun_terbit"  value="<?php echo $data['tahun_terbit']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Stok</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="number" name="stok"  value="<?php echo $data['stok']; ?>"></td>
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