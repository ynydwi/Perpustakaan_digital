<?php
session_start();
include 'koneksi.php';

if(isset ($_POST['email'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $namaLengkap = $_POST['namaLengkap'];
    $alamat = $_POST['alamat'];
    
       $query = mysqli_query($koneksi, "INSERT INTO user(username,password,email,namaLengkap,alamat)values('$username','$password','$email','$namaLengkap','$alamat')");
       if($query){
           echo '<script>alert("Selamat, Pendaftaran anda berhasil.");location.href="login.php";</script>';
       }else{
           echo '<script>alert("Selamat, Pendaftaran anda gagal")</script>';
       }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="Aplikasi Perpustakaan Digital">
	<meta name="keywords" content="Aplikasi Perpustakaan Digital, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/avatars/buku.jpg" />

	<link rel="canonical" href="https://demo-basic.Aplikasi Perpustakaan Digital.io/pages-sign-in.html" />

	<title>Sign Up | Aplikasi Perpustakaan Digital </title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4" style="padding-top: 50px;">
							<h1 class="h2">Aplikasi Perpustakaan Digital</h1>
							<p class="lead">
								Daftar untuk memiliki akun
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/avatars/buku.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Masukkan username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" />
										</div>
                                        <div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan email" />
										</div>
                                        <div class="mb-3">
											<label class="form-label">Nama Lengkap</label>
											<input class="form-control form-control-lg" type="text" name="namaLengkap" placeholder="Masukkan Nama Lengkap" />
										</div>
                                        <div class="mb-3">
											<label class="form-label">Alamat</label>
											<textarea name="alamat" cols="4" rows="5" placeholder="Masukkan Alamat" class="form-control form-control-lg" ></textarea>
										</div>
										<div> 
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign up</botton>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>