  	<?php 

  	include('koneksi.php');
 
$id = $_POST ['id'];
$Nama = $_POST ['Nama'];
$j1 = $_POST['j1']; 
$j2 = $_POST['j2']; 
$j3 = $_POST['j3']; 
$j4 = $_POST['j4']; 
$j5 = $_POST['j5']; 
$j6 = $_POST['j6'];
$j7 = $_POST['j7'];
$j8 = $_POST['j8']; 
$j9 = $_POST['j9']; 
$j10 = $_POST['j10']; 
$j11 = $_POST['j11']; 
$j12 = $_POST['j12']; 
$j13 = $_POST['j13']; 
$j14 = $_POST['j14'];
$j15 = $_POST['j15']; 
$j16 = $_POST['j16'];
  	 	
$query="INSERT INTO t_kuisioner set id='$id', nama='$Nama', j1='$j1', j2='$j2', j3='$j3', j4='$j4', j5='$j5', j6-'$j6', j7='$j7', j8='$j8', j9='$j9', j10='$j10', j11='$j11', j12='$j12', j13='$j13', j14='$j14', j15='$j15', j16='$j16'";
mysql_query($koneksi, $query);
header("location:hasil.php");
?>