<?php
session_start();
if(isset($_SESSION['name']))
{
if(!$_SESSION['name']=='admin')
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
}
else
{
header("Location:login.php?id=You are not authorised to access this page unless you are administrator of this website");
}
?>
<?php

$id=$_POST['id'];
$nosur=$_POST['nosur'];
$tgl=$_POST['tgl'];
$tglsur=$_POST['tglsur'];
$pgrm=$_POST['pgrm'];
$persur=$_POST['persur'];
$dis=$_POST['dis'];
$thn=$_POST['thn'];
$file_name = $_FILES['file']['name']; 
$tmp_name  = $_FILES['file']['tmp_name'];

$fp = fopen($tmp_name, 'r'); // open file (read-only, binary)
   // $file = fread($fp) or die("Tidak dapat membaca source file"); // read file
   // $file_content = mysql_real_escape_string($file) or die("Tidak dapat membaca source file"); // parse image ke string
    fclose($fp); 



?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO surat_masuk(id_surat,no_surat,tgl_surat,tgl_surat_diterima,pengirim,prihal_surat,disposisi,tahun,file_surat)VALUES('$id','$nosur','$tgl','$tglsur','$pgrm','$persur','$dis','$thn','$file_name')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Surat Masuk Sukses Di Buat!!");
			document.location="create_sumas.php?id=viewall";
			</script><?
}
?>
