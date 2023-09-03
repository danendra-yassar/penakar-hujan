<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

    <title>Login Sipejan</title>
</head>
<body>

<div class="container">

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
						<center>
							Sipejan Login
						</center>
					</div>
                    <div class="card-body">

					<form method="POST" action="proses-login.php">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="nama" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" value="LOGIN" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="#" class="btn btn-link">
                                    Lupa Password?
                                </a>
                            </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

</main>

</div>

<div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
					<div class="card-body">
					<center>
					<!-- notifikasi -->
					<?php 
							if(isset($_GET['pesan'])){
								if($_GET['pesan'] == "gagal"){
									echo "Login gagal! username dan password salah!";
								}
								else if($_GET['pesan'] == "logout"){
									echo "Anda telah berhasil logout";
								}
								else if($_GET['pesan'] == "belum_login"){
									echo "Anda harus login untuk mengakses halaman admin";
								}
							}
					?>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>