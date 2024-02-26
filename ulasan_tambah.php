<?php
if(isset($_POST['judul'])){
     
    $id_user = $_POST['id_user'];
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];

    $query = mysqli_query($koneksi, "INSERT INTO ulasan (id_user,id_buku,judul_buku,ulasan,rating) values('$id_user','$id_buku','$judul_buku','$ulasan','$ulasan','$rating')");

    if($query){
        echo '<script>alert("Ulasan berhasil ditambahkan!")</script>';
    }else{
        echo '<script>alert("Ulasan gagal ditambahkan")</script>';
    }
}
?>

<h1 class="h3 mb-3">Berikan Ulasan</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    <a href="?page=buku" class="btn btn-primary">Kembali</a>
                                    <hr>
                                    <form action="" method="post">
                                        <table>
                                            <tr>
                                                <td width="200">id user</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="id_user"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">id buku</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="id_buku"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">judul buku</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="judul_buku"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Ulasan anda</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="kompetensi_keahlian"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Rating</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="kompetensi_keahlian"></td>
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