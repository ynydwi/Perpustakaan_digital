<?php
session_start();
include 'koneksi.php';

if(isset ($_POST['username'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $cek_petugas = mysqli_query($koneksi, "SELECT*FROM petugas WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($cek_petugas) > 0){

        $_SESSION['user'] = mysqli_fetch_array($cek_petugas);
        echo '<script>alert("Selamat, anda berhasil login");location.href="index.php";</script>';
    }else{
        $cek_user = mysqli_query($koneksi, "SELECT*FROM user WHERE username='$username' AND password='$password'");

        if(mysqli_num_rows($cek_user) > 0){

            $_SESSION['user'] = mysqli_fetch_array($cek_user);
            echo '<script>alert("Selamat, anda berhasil login");location.href="index.php"; </script>';
        }else{
            echo '<script>alert("Username/password salah");</script>';
        }
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

	<title>Sign In | Aplikasi Perpustakaan Digital </title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100" style="background-image: url('img/photos/Library1.jfif');" >
		<div class="container d-flex flex-column" >
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2" ><b>Aplikasi Perpustakaan Digital</b></h1>
							<p class="lead" style="color: grey;">
								Sign in to your account to continue
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
											<label class="form-label">Username/NISN</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Masukkan username/NISN" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" />
										</div>
										<div> 
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</botton>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
										<div align="center">
										Tidak ada akun? <a href="register.php">Sign Up</a>
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