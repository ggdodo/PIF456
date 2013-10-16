<html>
<head><title>Identifikasi Metode</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
<input type="radio" name="jk" value="Pria"/>Pria
<input type="radio" name="jk" value="Wanita" checked/>Wanita <br/>
<input type="submit" value="ok"/>
</form>
<?php
if(isset($_POST['jk'])) {
echo $_POST['jk'];
}
?>
</body>
</html>