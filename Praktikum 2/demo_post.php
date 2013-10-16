<html>
<head><title>Metode Post</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<input type="text" name="nama"/><br/>
<input type="submit" value="OK"/>
</form>
<?php
if(isset($_POST['nama'])) {
echo 'Hallo, ' .$_POST['nama'];
}
?>
</body>
</html>