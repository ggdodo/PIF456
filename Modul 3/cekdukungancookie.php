<!DOCTYPE html>
<html>
<head><title>Cek Dukungan Cookie</title></head>
<body>
<?php
if(isset($_GET['dodo']) && $_GET['dodo'] == 1) {
if(isset($_COOKIE['test'])) {
echo 'support';
} else {
echo 'tidak support';
}
} else {
setcookie('test'. 'value');
$self = $_SERVER['PHP SELF'];
header('Location: ' . $self.'?dodo=1');
exit;
}

?>
<p>Tekan Refresh (F5)
</body>
</html>