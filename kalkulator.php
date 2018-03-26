<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator Konversi Bilangan</title>
  <meta name="author" content="Suckittrees">
  <title>Konversi Bilangan dengan PHP</title>
  <link rel="shortcut icon" href="http://suckittrees.com/favicon.png">
  <link rel="icon" href="http://suckittrees.com/favicon.png">
<style>
@import url(http://fonts.googleapis.com/css?family=Bree+Serif);

body {
    font-size:22px;
    line-height: 32px;
    word-wrap:break-word !important;
    font-family: 'Open Sans', sans-serif;
    background:#FFD800;
    }    
a {
    color: #212121;
}

h1 {
    margin-top: 100px;
    text-align:center;
    font-size:50px;
    font-family: 'Bree Serif', 'serif';
    }
</style>
</head>
<body>
 <p><strong>KONVERSI BILANGAN </strong>
 </p>
 <form method="post" action="">
   <table width="500" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td>Masukkan Bilangan </td>
       <td>: 
       <input name="angka" type="text" size="40" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>: 
       <input type="submit" name="d2b" value="decimal to binary" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>: 
       <input type="submit" name="d2o" value="decimal to octal" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>: 
       <input type="submit" name="d2h" value="decimal to hexadecimal" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>: 
       <input type="submit" name="b2d" value="binary to decimal" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>: 
       <input type="submit" name="o2d" value="octal to decimal" /></td>
     </tr>
     <tr>
       <td>&nbsp;</td>
       <td>: 
       <input type="submit" name="h2d" value="hexadecimal to decimal" />
       <br> 
       : 
       <input type="submit" name="h2d2" value="Basis4 to decimal" /></td>
     </tr>
   </table>
   <p>&nbsp;</p>
 </form>
 <p><strong>OUTPUT</strong></p>
 <p>Hasil :
   <textarea cols="49">
  <?php
  
  $angka = isset($_POST['angka']) ? $_POST['angka']:"";
 
  if (isset($_POST['d2b'])) {
      echo decbin($angka);
  }
  if (isset($_POST['d2o'])) {
      echo decoct($angka);
  }
  if (isset($_POST['d2h'])) {
      echo dechex($angka);
  }
  if (isset($_POST['b2d'])) {
      echo bindec($angka);
  }
  if (isset($_POST['o2d'])) {
      echo octdec($angka);
  }
  if (isset($_POST['h2d'])) {
      echo hexdec($angka);
  }
 
  ?>
   </textarea>
 </p>
</body>
</html>