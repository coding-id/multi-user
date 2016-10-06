<?php
require_once('System/database.php');
require_once('Config/koneksi.php');
@session_start();

$db = new Database($servername,$username,$password,$database);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Creativefull</title>
	<link rel="stylesheet" type="text/css" href="Public/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="Public/css/catering.css"/>
	<link rel="stylesheet" type="text/css" href="Public/font-awesome/css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script type="text/javascript" src="Public/js/jquery.js"></script>
</head>
<body>
	<nav class="navbar navbar-default primary">
		<div class="container">
			<div class="navbar-header">
				<a href="/" + store.uri class="navbar-brand color-white"> Creativefull </a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#zero-menu" aria-expanded="true" id="toggle-button">
					<span class="sr-only"> Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="zero-menu" aria-expanded="false">
				<ul class="nav navbar-right">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section>
		<?php
			include 'App/home.php';
		?>
	</section>
</body>
<script type="text/javascript" src="Public/js/bootstrap.min.js"></script>
</html>
