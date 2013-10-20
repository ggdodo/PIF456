<!DOCTYPE html>
<html>
<head><title>Cek Dukungan Cookie</title></head>
<body>
<?php
setcookie('nama', 'nilai');
if(isset($_COOKIE['nama'])) {
echo 'cookie di-set<br/>';
setcookie('nama', '', time()-3*3600);
echo 'cookie dihapus';
} else {
echo 'unset';
}
?>
<p>Tekan Refresh (F5)
</body>
</html>