<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Login Multi User</title>
	<link rel="stylesheet" type="text/css" href="Public/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="Public/css/catering.css"/>
	<link rel="stylesheet" type="text/css" href="Public/font-awesome/css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="Public/js/jquery.js"></script>
</head>
<body>
	<?php
	require_once('System/database.php');
	require_once('Config/koneksi.php');
	@session_start();

	$db = new Database($servername,$username,$password,$database);

	// LOAD MODEL
	require_once("Model/login.php");
	$Login = new Login($db);

	?>
	<section>
		<div class="row">
			<div class="col-md-4" style="float:none; margin:0px auto;">
				<div class="panel box border-bottom-primary">
					<div class="panel-header">
						<center>
							<h3 class="panel-title">Login</h3>
						</center>
					</div>
					<div class="panel-body">
						<?php
							if (@$_POST['login']) {
								$username = @$_POST['username'];
								$password = @$_POST['password'];
								if ($username == "" || $password == "") {
									?>
									<p class="alert alert-danger color-white">
										Masih Ada Data Yang Kosong
									</p>
									<?php
								}
								else {
									$hasilLogin = $Login->check($username, $password);
									if ($hasilLogin == true) {
										header('Location: index.php');
										die();
									}
									else {
										?>
											<p class="alert alert-danger">
												Username / Password Salah
											</p>
										<?php
									}
								}
							}
						?>
						<form action="" method="POST">
							<div class="form-group">
								<label class="label-control">Username</label>
								<input type="text" name="username" class="form-control" value="<?php echo @$username; ?>">
							</div>
							<div class="form-group">
								<label class="label-control">Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" name="login" value="Login" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>