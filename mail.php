<html>

<head></head>

<body>

<?php

$MailTo = "hamimis729@gmail.com"; //penerima jawaban responden

$MailSubject = "Subject of the message"; //subyek email

$MailHeader = "From: someone@domain_name.com"; //pengirim

 

$Envoi = 1;   //beri nilai 1 untuk variable $Envoi

 

if ($champ1 == ""){ //nama field 1

echo("<font face=verdana size=2>Anda lupa mengisi field 1.</font><br>"); //pesan yang keluar jika field tidak diisi

     $Envoi = 0;  //jika field 1 koosng, variable $Envoi bernilai 0

}

else {

$MailBody = "Question 1 : $champ1\n"; //jika field 1 sudah diisi, nilai dimasukkan ke variable MailBody

}

if ($champ2 == ""){

echo("<font face=verdana size=2>Anda lupa mengisi field 2.</font><br>");

     $Envoi = 0;

}

else {

     $MailBody .= "Question 2 : $champ2\n";

}

if ($champ3 == ""){

echo("<font face=verdana size=2>Anda lupa mengisi field 3</font><br>");

     $Envoi = 0;

}

else {

     $MailBody .= "Question 3 : $champ3\n";

}

if ($champ4 == ""){

echo("<font face=verdana size=2>Anda lupa mengisi field 4</font><br>");

     $Envoi = 0;

}

else {

     $MailBody .= "Question 4 : $champ4\n";

}

if ($champ5 == "0"){

echo("<font face=verdana size=2>Anda lupa mengisi Field 5</font><br>");

     $Envoi = 0;

}

else {

     $MailBody .= "Question 5 : $champ5\n";

}

if ($champ6 == ""){

echo("<font face=verdana size=2>Anda lupa mengisi field 6.</font><br>");

     $Envoi = 0;

}

else {

     $MailBody .= "Question 6 : $champ6\n";

}

if ($champ7 == ""){

echo("<font face=verdana size=2>Anda lupa mengisi field 7.</font><br>");

     $Envoi = 0;

}

else {

     $MailBody .= "Question 7 : $champ7\n";

}

 

//Routine untuk checkbox

 

     $MailBody .="Question 8 : ";

 

$items = 3;  //initiasi kemungkinan  item #

 

for ($i = 1; $i <= $items; $i++) {  //loop untuk  item #

 

     $MailBody .= "$champ8[$i], ";  //menyimpan hasilnya di variable MailBody

}

 

//Routine untuk mengirim pesan

 

if ($Envoi == 1) {  //Checking bahwa variable $Envoi bernilai 1

mail($MailTo, $MailSubject, $MailBody, $MailHeader);  //pesan dikirimkan

echo("<p><font face=verdana size=2>Jawaban Anda sudah terkirim <br>Terima kasih</font>"); //pesan penegasan

}

?>

</body>

</html>