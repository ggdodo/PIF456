<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pencarian data</title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- CSS just for the tests page -->
    <link href="css-tests.css" rel="stylesheet">
</head>
<body>
<form class="form-inline" action="<?php $_SERVER['PHP_SELF'];?>" method="get">
	<div class="row">
    <div class="span12">
	Nama <input type="text" class="span2" placeholder="span2" name="nama" value="<?php echo isset($_GET['nama']) ? $_GET['nama'] :'';?>"/><br/>
	</div><!--/span-->
  </div><!--/row--> 
	<button class="btn btn-info">Cari</button>
</form>

<?php
if(isset($_GET['nama'])) {
	require "koneksi.php";
	$key = $_GET['nama'];
	$sql = "SELECT * FROM maha WHERE nama LIKE '%$key%'";
	$res = mysql_query($sql);
if($res) {
	$num = mysql_num_rows($res);
	if($num) {
		echo 'Ditemukan' . $num . 'row(s)'; ?>
		<div class="row">
  			<div class="span7">
		<table class="table table-striped" align="center" border=1 cellspacing=1 cellpadding=5>
			
			<tr>
				<th>#</th>
				<th width=100>NIM</th>
				<th width=150>Nama</th>
				<th>Alamat</th>
			</tr>
			<?php
			$i=1;
			while ($row = mysql_fetch_row($res)) { ?>
			<tr class="success">
				<td>
					<?php echo $i;?>
				</td>
				<td>
					<?php echo $row[0];?>
				</td>
				<td>
					<?php echo $row[1];?>
				</td>
				<td>
					<?php echo $row[2];?>
				</td>
			</tr>
			<?php
			$i++;
			}
		?>
		</table>
	</div>
</div>
	<?php
	} else {
		echo 'Data tidak ditemukan';
	}
}
} else {
	echo 'Masukkan kata kunci pencarian';
}
?>
</body>
</html>