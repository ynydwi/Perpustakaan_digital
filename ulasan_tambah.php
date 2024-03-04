<?php
if(isset($_POST['ulasan_buku'])){
     
    $id_user = $_POST['id_user'];
    $id_buku = $_POST['id_buku'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];

    $query = mysqli_query($koneksi, "INSERT INTO ulasan_buku (id_user, id_buku, ulasan, rating) values('$id_user', '$id_buku', '$ulasan', '$rating')");


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
                                                <td><div><input type="hidden" name="id_user" value="<?=$_SESSION['user']['id_user'];?>"></div></td>
                                            </tr>
                                            <tr>
                                                <td width="200">judul buku</td>
                                                <td width="1">:</td>
                                                <td> <select name="id_buku" class="form-select">
                                    <option value="" hidden></option>
                                    <?php
                                    $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                    while ($data_buk = mysqli_fetch_array($buk)) {
                                    ?>
                                        <option value="<?= $data_buk['id_buku'] ?>"><?= $data_buk['judul'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Ulasan anda</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="ulasan"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Rating</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="text" name="rating"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><button class="btn btn-success" type="submit" name="ulasan_buku">Simpan</button></td>
                                            </tr>
                                        </table>
                                    </form>
								</div>
							</div>
						</div>
					</div>