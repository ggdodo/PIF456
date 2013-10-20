<!DOCTYPE html>
<html>
<head><title>Hapus Session</title></head>
<body>
<?php
session_start();
if(!isset($_SESSION['test'])) {
unset($_SESSION['test']);
echo 'seisson dihapus';
} else {
echo 'unset';
print_r($_SESSION);
}
?>
<p>Tekan Refresh (F5)
</body>
</html>