<?php
	if (!empty($_SESSION['id'])) {
		?>
		<h1>SELAMAT DATANG <?php echo $_SESSION['level']; ?></h1>
		<?php
	}
	else {
		?>
		<script>
			window.location.href='login.php';
		</script>
		<?php
	}
?>