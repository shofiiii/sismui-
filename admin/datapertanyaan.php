 <!DOCTYPE html>
 <html>
 <head>
 	<title>Dashboard</title>
 </head>
 <body>
 <div class="judul">
 <h1>Data Pertayaan</h1>
 </div>
 <br>

 <?php
 if (isset($_GET['pesan'])) {
 	$pesan = $_GET ['pesan'];
 	if ($pesan == "input"){
 		echo "Data Berhasil di input.";
 	}elseif ($pesan == "update") {
 		echo "Data Berhasil di update.";
 	}elseif ($pesan =="hapus") {
 		echo "Data Berhasil di Hapus";
 	}
 }
  ?>

  <br>
  <a class="tombol" href="input.php"> + Tambah Baru</a>
  <a class="tombol" href="home.php">Kembali</a>
  <h3>Data Pertanyaan</h3>
  <table border="1" class="table">
  	<tr>
  		<th>ID</th>
  		<th>Pertanyaan</th>
  		<th>Isi 1</th>
  		<th>Isi 2</th>
  		<th>Isi 3</th>
  		<th>Isi 4</th>
  		<th>Aksi</th>
  	</tr>

  	<?php 

  	include "koneksiper.php";
  	$query_mysql = mysql_query("SELECT * FROM t_pertanyaan")or die(mysql_error());
  	$nomor = 1;
  	while ($data = mysql_fetch_array($query_mysql)) {
  		# code...
  	
  	 ?>

  	 <tr>
  	 	<td><?php echo $nomor++; ?></td>
  	 	<td><?php echo $data['pertanyaan']; ?></td>
  	 	<td><?php echo $data['isi1']; ?></td>
  	 	<td><?php echo $data['isi2']; ?></td>
  	 	<td><?php echo $data['isi3']; ?></td>
  	 	<td><?php echo $data['isi4']; ?></td>
  	 	<td>
  	 		<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
  	 		<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
  	 	</td>
  	 </tr>
  	 <?php } ?>
  </table>
 </body>
 </html>