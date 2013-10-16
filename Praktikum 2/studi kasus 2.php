<html>
<head><title>Identifikasi Metode</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pilih Hobby Anda :
<input type="checkbox" name="hobi1" value="Olahraga" checked/>Olahraga <br/>
<input type="checkbox" name="hobi2" value="Membaca"/>Membaca <br/>
<input type="checkbox" name="hobi3" value="Menulis"/>Menulis <br/>
<input type="checkbox" name="hobi4" value="Menyanyi"/>Menyanyi <br/>
<input type="checkbox" name="hobi5" value="Bermain Musik"/>Bermain Musik <br/>
<input type="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['hobi1'])) {
echo $_POST['hobi1'];
echo "<br/>";
}
if(isset($_POST['hobi2'])) {
echo $_POST['hobi2'];
echo "<br/>";
}
if(isset($_POST['hobi3'])) {
echo $_POST['hobi3'];
echo "<br/>";
}
if(isset($_POST['hobi4'])) {
echo $_POST['hobi4'];
echo "<br/>";
}
if(isset($_POST['hobi5'])) {
echo $_POST['hobi5'];
echo "<br/>";
}
?>
</body>
</html>