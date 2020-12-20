<!DOCTYPE html>
 <html>
 <head>
 	<title>Dashboard</title>
 </head>
 <body>
 <div class="judul">
 <h1>Data Responden</h1>
 </div>
 <br/>
 <br/>

 <a class="tombol" href="inputres.php"> + Tambah Baru</a>
  <a class="tombol" href="home.php">Kembali</a>
  <h3>Data Responden</h3>
  <table border="1" class="table">
  	<tr>
  		<th>ID</th>
  		<th>Nama</th>
  		<th>Jawaban 1</th>
  		<th>Jawaban 2</th>
  		<th>Jawaban 3</th>
  		<th>Jawaban 4</th>
  		<th>Jawaban 5</th>
  		<th>Jawaban 6</th>
  		<th>Jawaban 7</th>
  		<th>Jawaban 8</th>
  		<th>Jawaban 9</th>
  		<th>Jawaban 10</th>
  		<th>Jawaban 11</th>
  		<th>Jawaban 12</th>
  		<th>Jawaban 13</th>
  		<th>Jawaban 14</th>
  		<th>Jawaban 15</th>
  		<th>Jawaban 16</th>

  		<th>Aksi</th>
  	</tr>

  	<?php 

  include 'koneksikui.php';

  	$query_mysql = "SELECT * FROM t_kuisioner";
  	$nomor = 1;
  	$sql=mysql_query($query_mysql);
  	while ($query_mysql = mysql_fetch_array($sql)) {
  		# code...
  	
  	 ?>

  	 <tr>
  	 	<td><?php echo $nomor++; ?></td>
  	 	<td><?php echo $query_mysql['Nama']; ?></td>
  	 	<td><?php echo $query_mysql['j1']; ?></td>
  	 	<td><?php echo $query_mysql['j2']; ?></td>
  	 	<td><?php echo $query_mysql['j3']; ?></td>
  	 	<td><?php echo $query_mysql['j4']; ?></td>
  	 	<td><?php echo $query_mysql['j5']; ?></td>
  	 	<td><?php echo $query_mysql['j6']; ?></td>
  	 	<td><?php echo $query_mysql['j7']; ?></td>
  	 	<td><?php echo $query_mysql['j8']; ?></td>
  	 	<td><?php echo $query_mysql['j9']; ?></td>
  	 	<td><?php echo $query_mysql['j10']; ?></td>
  	 	<td><?php echo $query_mysql['j11']; ?></td>
  	 	<td><?php echo $query_mysql['j12']; ?></td>
  	 	<td><?php echo $query_mysql['j13']; ?></td>
  	 	<td><?php echo $query_mysql['j14']; ?></td>
  	 	<td><?php echo $query_mysql['j15']; ?></td>
  	 	<td><?php echo $query_mysql['j16']; ?></td>
  	 	


  	 	<td>
  	 		<a class="edit" href="editkui.php?id=<?php echo $query_mysql['id']; ?>">EDIT</a>
  	 		<a class="hapus" href="hapuskui.php?id=<?php echo $query_mysql['id']; ?>">HAPUS</a>
  	 	</td>
  	 	
  	 </tr>
  	 <?php } ?>
  </table>
  <center>
  <td>
  	 		<a class="tombol" href="kalkulasi.php" >Calculate</a>
  	 	</td>
  	 	</center>
 </body>
 </html>