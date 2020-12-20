<HTML>

<HEAD>

<TITLE>formulir data diri responden</TITLE>

 

<!--formulir ini dibuat oleh Jonathan Sarwono. Jika ingin menggunakannya dan mendapatkan  kesulitan cara memasang programmnya,  hubungi di jsarwono@unikom.ac.id. Silahkan juga melihat websitenya di http://js.unikom.ac.id. Anda bebas menggunakan atau memodifikasi formulir ini sesuai dengan kebutuhan-->

 

</HEAD>

 

<BODY BGCOLOR="lightskyblue">

<H1 ALIGN="left">Data Diri Responden </H1>

<P>Silahkan mengisikan data diri anda pada formulir di bawah ini</p><br>

 

<FORM ACTION="form_process.php" METHOD="post">

<B>Nama:</B>

<BR>

<INPUT TYPE="text" NAME="nama"><BR>

 

<B>Jenis Kelamin:</B>

<BR>

<INPUT TYPE="radio" NAME="sex" VALUE="Pria">Pria

<INPUT TYPE="radio" NAME="sex" VALUE="Wanita">Wanita<br>

 

<B>Email:</B>

<BR>

<INPUT TYPE="text" NAME="email"><br>

 

<B>Alamat:</B>

<BR>

<INPUT TYPE="text" NAME="alm"><br>

 

<B>Pendidikan:</B>

<BR>

<INPUT TYPE="radio" NAME="sekolah" value="SLTA">SLTA

<INPUT TYPE="radio" NAME="sekolah" value="Diploma">Diploma

<INPUT TYPE="radio" NAME="sekolah" value="Sarjana">Sarjana

<INPUT TYPE="radio" NAME="sekolah" value="Pasca Sarjana">Pasca Sarjana

<BR>

 

<B>Pekerjaan:</B>

<BR>

<INPUT TYPE="text" NAME="kerja"><BR>

<B>Umur</B><BR>

<SELECT NAME="umur">

<OPTION>20 s/d 29 tahun</OPTION>

<OPTION>30 s/d 39 tahun</OPTION>

<OPTION>40 s/d 49 tahun</OPTION>

<OPTION>50 s/d 59 tahun</OPTION>

<OPTION> lebih dari 60 tahun</OPTION>

</SELECT>

<BR>

 

<B>Pengeluaran per bulan</B><BR>

<SELECT NAME="keluar">

<OPTION>Kurang dari 1 juta</OPTION>

<OPTION>1 jt s/d < 2 jt</OPTION>

<OPTION>2 jt s/d < 3 jt</OPTION>

<OPTION>3 jt s/d < 4 jt</OPTION>

<OPTION> lebih dari 4 jt</OPTION>

</SELECT>

<BR>

 

<B>Saran dan Komentar</B><BR>

<P>Tuliskan saran dan komentar mengenai layanan kami di bawah ini</P>

<textarea cols=20 rows=8></textarea>

<BR>

 

 

<INPUT TYPE="submit" VALUE="Kirim">

<INPUT TYPE="reset" VALUE="Batal">

 

</FORM>

</BODY>

</HTML>