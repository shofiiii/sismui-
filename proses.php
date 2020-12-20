<?php 

session_start();
include "koneksikui.php";

$id;
$nama = $_POST['nama'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 =$_POST['p4'];

$query="INSERT INTO t_kuisioner values ('$id','$nama','$p1','$p2','$p3','$p4')";
$exe = mysql_query($query);
echo "<a href='pertanyaan.php'>Submit</a></br>";
echo "<a href='view.php'>Lihat Hasil</a></br>";


 ?>