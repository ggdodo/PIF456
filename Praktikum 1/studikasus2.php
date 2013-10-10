<!DOCTYPE html>
<html>
<head>
<title>Generate Table</title>
</head>



<?php
function Create_table($baris, $kolom)
{

echo("<table border=\"1\">\n");

for($b = 0; $b < $baris; $b++) {
echo("<tr height=\"30px\">\n");

for($k = 0; $k < $kolom; $k++) {
echo("<td width=\"100px\"></td>\n");
}

echo("</tr>\n");
}
echo("</table>\n");

}
Create_table(12,3);
?>


</body>
</html>