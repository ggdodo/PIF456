<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman</title>
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- CSS just for the tests page -->
    <link href="css-tests.css" rel="stylesheet">
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';


$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$rec_limit = 5;
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('mydatabase');
$sql = "SELECT count(nim) FROM maha ";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET{'page'} ) )
{
   $page = $_GET{'page'} + 1;
   $offset = $rec_limit * $page;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "SELECT nim, nama, alamat ".
       "FROM maha ".
       "LIMIT $offset, $rec_limit";

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?>
<h4>Daftar Database</h4>
<div class="row">
  <div class="span4">
<table class="table table-stripped" border=1 cellspacing=1 callpadding=5>
<tr>
  <th>#</th>
  <th width=100>NIM</th>
  <th width=150>NIM</th>
  <th>Alamat</th>
</tr>
<?php
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{ $i=1;?>
    <tr>
    <td>
      <?php echo $i; ?>
    </td>
    <td>
      <?php echo $row['nim']; ?>
    </td>
    <td>
      <?php echo $row['nama']; ?>
    </td>
    <td>
      <?php echo $row['alamat']; ?>
    </td>
  </tr>
  <?php
} 
?>
</table>
</div>
</div>
<?php
if( $page > 0 )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a> |";
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
}
else if( $page == 0 )
{
   echo "<a href=\"$_PHP_SELF?page=$page\"><h4>Next 10 Records</h4></a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
}
mysql_close($conn);
?>