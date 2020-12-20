<!DOCTYPE html>
<html>
<head>
	<title>Edit Data </title>
</head>
<body> 
<p><a href="datapertanyaan.php">Kembali</a> / <a href="input.php">Tambah Baru</a>


<?php  

include "koneksiper.php" ;

	$id = $_REQUEST['id'];
	$query_mysql ="SELECT * FROM t_kuisioner WHERE id='".$id."'";
	$result = mysql_query($query_mysql) or die(mysql_error());
	$sql=mysql_query($query_mysql);
//$nomor=1;
while ($data= mysql_fetch_array($sql)) {
	# code...

?>

<form action="update.php" method="post">

<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $data['$id'] ?> ">
		<input type="text" name="nama" value="<?php echo $data['$nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Pertanyaan</td>
		<td>
			<input type="text" name="pertanyaan" value="<?php echo $data['$pertanyaan'] ?>">
		</td>
	</tr>
	<tr>
		<td>Isi 1</td>
		<td>
			<input type="text" name="isi1" value="<?php echo $data['$isi1'] ?>">
		</td>
	</tr>
	<tr>
		<td>Isi 2</td>
		<td>
			<input type="text" name="isi2" value="<?php echo $data['$isi2'] ?>">
		</td>
	</tr><tr>
		<td>Isi 3</td>
		<td>
			<input type="text" name="isi3" value="<?php echo $data['$isi3'] ?>">
		</td>
	</tr><tr>
		<td>Isi 4</td>
		<td>
			<input type="text" name="isi4" value="<?php echo $data['$isi4'] ?>">
		</td>
		<tr>
			<td></td>
			<td><input type="submit" name="Simpan"></td>
		</tr>
	</tr>

	<?php } ?>
	</table>
	</form>
	</body>
	</html>