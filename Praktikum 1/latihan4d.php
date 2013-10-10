<html>
<head><title>Seleksi if-elseif-else</title><head>
<body>
<?php
$a = 10;
if($a == 10) {
echo "a SAMA DENGAN NOL <br/>"; 
} elseif ($a == 1) {
echo "a sama dengan SATU";
} elseif($a == 2)  {
echo "a sama dengan 2";
}
switch ($a) {
case 1:
echo "a saama dengan satu";
break;
case 10:
echo "a saama dengan sepuluh <br/>"; 
break;
case 2:
echo "a saama dengan dua";
break;
}
?>
</body>
</html>