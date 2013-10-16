<html>
<head><title>Prefill Data Radio Button</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin
<input type="radio" name="jk" value="Pria" checked 
<?php
if ($_POST['jk'] == 'Pria') {
echo 'checked="checked"';
}
?>/>Pria
<input type="radio" name="jk" value="Wanita"
<?php
if ($_POST['jk'] == 'Wanita') {
echo 'checked="checked"';
}
?>
/>Wanita <br/>
<input type="submit" value="ok"/>
</form>
<?php
if(isset($_POST['jk'])) {
echo $_POST['jk'];
}
?>
</body>
</html>