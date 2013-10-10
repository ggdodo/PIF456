<html>
<head><title>Loop for</title></head>
<body>
<?php
function print_teks($teks, $bold = true) {
echo $bold ? '<b>' .$teks. '</b>' : $teks;
}
print_teks('Indonesiaku');
print_teks('Indonesiaku', false);
?>
</body>
</html>