<!DOCTYPE html>
<html lang="en">
<head>
	<title>Limitasi Data</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- CSS just for the tests page -->
    <link href="css-tests.css" rel="stylesheet">
</head>
<body>
	<?php
defined('VALID') or die('not allowed');
function init_login() {
	$nama = "admin";
	$pass = "admin";
require "data_handler.php";
	if (isset($_POST['nama']) && isset($_POST['pass'])) {
		$n = trim($_POST['nama']);
		$p = trim($_POST['pass']);

		if(($n === $nama) && ($p === $pass)) {
			setcookie('nlogin', $n);
			setcookie('time', time());
			?>
			<script type="text/javascript">
			document.location.href="./";
			</script>
		<?php
		} else {
			echo 'Nama/Password tidak sesuai';
			return false;
		}
	}
}

function validate() {
	if(!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time'])) { ?>
		
		<form class="form-horizontal" action="" method="post">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				<input type="text" id="inputEmail" placeholder="Nama" name="nama">
				</div>
				</div>
		<div class="control-group">
<label class="control-label" for="inputPassword">Password</label>
<div class="controls">
<input type="password" id="inputPassword" placeholder="Password" name="pass">
</div>
</div>
<div class="control-group">
<div class="controls">
<label class="checkbox">
<input type="checkbox"> Remember me
</label>
<button type="submit" class="btn">Sign in</button>
</div>
</div>
		</form>
		<?php
		exit;
	}
	if (isset($_GET['m']) && $_GET['m'] == 'logout') {
		if(isset($_COOKIE['nlogin'])) {
		setcookie('nlogin', '', time() - 3 *3600);
		}
		if(isset($_COOKIE['time'])) {
		setcookie('time', '', time() - 3 *3600);
		}
		?>
		<script type="text/javascript">
		document.location.href="./index.php";
		</script>
		<?php
	}
}
?>
</body>
	</html>