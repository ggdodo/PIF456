<html>
<head><title>Prefill Data Radio Button</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pekerjaan
<select name="job">
<option value="Pelajar">Pelajar
<option value="ABRI">ABRI
<option value="PNS">PNS
<option value="Swasta">Swasta
</select><br/>
<input type="submit" value="ok"/>
</form>
<?php
if(isset($_POST['job'])) {
echo $_POST['job'];
}
?>
</body>
</html>