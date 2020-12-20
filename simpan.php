<?php

//include 'koneksikui.php';
if ($_POST['submit']=="submit"){
$id = $_POST['id'];
$nama = $_POST['nama'];
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

$input = "INSERT into tb_kuisioner(id,nama,j1,j2,j3,j4,h5,j6,j7,j8,j9,j10,j11,j12,j13,j14,j15,j16) VALUES ('','$nama','$j1','$j2''$j3','$j4','$j5','$j6','$j7','$j8','$j9','$j10','$j11','$j12','$j13','$j14','$j15','$j16'");
$query_input = mysql_query($input);


  //$query = "INSERT INTO tb_kuisioner VALUES ('','$nama','$j1','$j2''$j3','$j4','$j5','$j6','$j7','$j8','$j9','$j10','$j11','$j12','$j13','$j14','$j15','$j16'";
  //mysql_query($koneksi, $query);
 // header("location:home.php");

  ?>
  