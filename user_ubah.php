<?php
$id = $_GET['id'];
if(isset($_POST['nama_lengkap'])){
     
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "UPDATE user set id_user='$id_user', username='$username',email='$email',nama_lengkap='$nama_lengkap',alamat='$alamat' WHERE id_user=$id");

    if(isset($_POST['password'])) {
        $query = mysqli_query($koneksi, "UPDATE user set password='$password' WHERE username=$id");
    }

    if($query){
        echo '<script>alert("Ubah data Berhasil")</script>';
    }else{
        echo '<script>alert("Ubah data Gagal")</script>';
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM user WHERE id_user=$id");
$data = mysqli_fetch_array($query);
?>

<h1 class="h3 mb-3">Tambah Data user</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
                                    <a href="?page=user" class="btn btn-primary">Kembali</a>
                                    <hr>
                                    <form action="" method="post">
                                        <table>
                                        <tr>
                                                <td width="200">username </td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" value="<?php echo  $data['username']; ?>" type="number" name="username"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">email</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" value="<?php echo  $data['email']; ?>" type="number" name="email"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">nama lengkap</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" value="<?php echo  $data['nama_lengkap']; ?>" type="text" name="nama_lengkap"></td>
                                            </tr>
                                            <tr>
                                                <td width="200">Alamat</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" value="<?php echo  $data['alamat']; ?>" type="text" name="alamat"></td>
                                            </tr>
                                           
                                            <tr>
                                                <td width="200">Password</td>
                                                <td width="1">:</td>
                                                <td><input class="form-control" type="password" name="password"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><button class="btn btn-success" type="submit">Simpan</button>
                                                *) Jika Password tidak di ganti, maka kosongkan saja.
                                            </td>
                                            </tr>
                                        </table>
                                    </form>
								</div>
							</div>
						</div>
					</div>