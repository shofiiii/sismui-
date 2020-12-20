<html>

<head>

<title>Formulir Pertanyaan</title>

</head>

 

<body>

<form method="post” action="mail.php">

  <table width="600">

    <tr>

      <td width="35"></td>

      <td width="565"><small><font face="Verdana">Pertanyaan no 1-5:     Mengisi</font></small><p>&nbsp;</td>

    </tr>

    <tr>

      <td width="35"></td>

      <td width="565">

        <font face="Verdana"><small>Pertanyaan 1 :</small><br>

        <small><input type="text" name="champ1" size="20"> </small></font>

 

        <p><font face="Verdana"><small>Pertanyaan 2 :</small><br>

        <small><input type="text" name="champ2" size="20"> </small></font></p>

 

        <p><font face="Verdana"><small>Pertanyaan 3 :</small><br>

        <small><input type="text" name="champ3" size="20"> </small></font></p>

 

        <p><font face="Verdana"><small>Pertanyaan 4 :</small><br>

        <small><input type="text" name="champ4" size="20"> </small></font></p>

 

<p><font face="Verdana"><small>Pertanyaan 5 : Memilih satu jawaban</small><br>

        <small><select name="champ5" size="1">

         <option selected value="0">Pilih</option>

         <option value="Reponse5_1">1</option>

         <option value="Reponse5_2">2</option>

         <option value="Reponse5_3">3</option>

         <option value="Reponse5_4">4</option>

         <option value="Reponse5_5">5</option>

          </select></small></font></p>

 

<p><font face="Verdana"><small>Pertanyaan 6 : Memberikan jawaban bentuk uraian</small><br>

<small><textarea rows="4" name="champ6" cols="40"> </textarea></small></font></p>

 

<p><small><font face="Verdana">Pertanyaan 7 : Memilih satu jawaban</font></small></p>

      <p><input type="radio" value="Reponse7_1" name="champ7">

      <font face="verdana"><small> Pilihan 1 </small></font>

      <input type="radio" name="champ7" value="Reponse7_2">

      <font face="verdana"><small> Pilihan 2</small></font></p>

 

<p><font face="Verdana"><small>Pertanyaan 8 : Memilih jawaban lebih dari satu</small></font></p>

      <table border="0" width="100%" cellspacing="1" cellpadding="4">

        <tr>

          <td width="7%"><input type="hidden" name="champ8[]" value="aucune">

            <input type="checkbox" name="champ8[]" value="item_1"></td>

          <td width="93%"><font face="Verdana"><small>Item 1</small> </font></td>

                 </tr>

                   <tr>

<td width="7%"><input type="checkbox" name="champ8[]" value="item_2"> </td>

<td width="93%"><small><font face="Verdana">Item 2</font> </small></td>

        </tr>

                                <tr>

<td width="7%"><input type="checkbox" name="champ8[]" value="item_3"> </font></td>

<td width="93%"><small><font face="Verdana">Item 3</font> </small></td>

        </tr>

      </table>

      </td>

    </tr>

  </table>

  <p>&nbsp;</p>

  <p><small><font face="Verdana"> <input type="submit" value="Kirim" name="envoyer"> <input

  type="reset" value="Batal" name="recommencer"> </font></small> <br>

  <br>

  </p>

</form>

</body>

</html>