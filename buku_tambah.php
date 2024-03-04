<?php
if(isset($_POST['judul'])){
     
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];

    $query = mysqli_query($koneksi, "INSERT INTO buku (judul,penulis,penerbit,tahun_terbit,stok) values('$judul','$penulis','$penerbit','$tahun_terbit','$stok')");

    if($query){
        echo '<script>alert("Tambah data buku Berhasil"); location.href="buku.php";</script>';
    }else{
        echo '<script>alert("Tambah data buku Gagal")</script>';
    }
}
?>

<h1 class="h3 mb-3">Tambah Data buku</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    <a href="?page=buku" class="btn btn-primary">Kembali</a>
                                    <hr>
                                    <form action="" method="post">
                                        <table>
                                            <tr>
                                                <td width="200">Judul buku</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="judul"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Penulis</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="penulis"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Penerbit</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="penerbit"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Tahun Terbit</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="tahun_terbit"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Stok</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="stok"></td>
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