<!DOCTYPE html>
<head>
<title> CAESAR CHIPER KRIPTOGRAFI</title>
</head>
<body style = 'margin : 100px; font : 25px arial;' bg background="blue.png">
<?php 
session_start();
$kalimat = $_GET["kata"]; // method post dan get
// $key = $_GET["key"]; // method post dan get

for($i=0;$i<strlen($kalimat);$i++)
{
  $kode[$i]=ord($kalimat[$i]);  //rubah ASCII ke desimal
  $b[$i]=($kode[$i] + 3 ) % 256; //proses enkripsi
  $c[$i]=chr($b[$i]);            //merubah desimal ke ASCII
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "
<html>
 <center>
 <p><b> HASIL KRIPTOGRAFI </b></p>
 <form method ='POST'>
 <table border = '3' cellspacing = '10' cellpadding = '15'
 style = 'border : #101; color: #101; font-family : arial; font-size : 20px;'>
 <tr>
  <td><b> KALIMAT ASLI </b></td>
  <td width = '10' align = 'center'><b> : </b></td>
  <td> <input type = 'text' name = 'kata' value= '".$kalimat."'/> </td>
  </tr>
  </center>
</table>
</form>
</body>
</html>
";

$hsl = '';
for ($i=0;$i<strlen($kalimat);$i++)
$hsl = $hsl.$c[$i];
echo "
<html>
<center>
<form method ='POST'>
 <table border = '3' cellspacing = '10' cellpadding = '15'
 style = 'border : #101; color: #101; font-family : arial; font-size : 20px;'> 
 <tr>
  <td><b> HASIL ENKRIPSI </b></td>
  <td align = 'center'><b> : </b></td>
  <td> <input type = 'text'  name = 'key' value= '".$hsl."'/> </td>
  </tr>
   </center>
</table>
</form>
</body>
</html>
<a href = 'index.php'><b> Kembali </b></a>
  ";
?>
</html>