<html>
<head><title>Halaman Administrator</title>
<style type="text/css">
.inner{
margin: 200px auto;
padding: 20px;
width: 240px;
border: 1px solid #333;
}
</style>
</head>
<body>
<?php
ini_set("display errors", 1);
define('VALID', 1);
require_once('./auth.php');
init_login();
validate();
?>
<h3>Simulasi Halaman Login</h3>
<p>
<a href="?m=logout">Logout</a>
<?php
require "indexe.php";
?>
<p>
Menu-menu admin ada disini
</body>
</html>