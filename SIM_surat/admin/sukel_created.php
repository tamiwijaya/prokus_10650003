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
$tjuan=$_POST['tjuan'];
$pgrm=$_POST['pgrm'];
$persur=$_POST['persur'];
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
$qry=mysql_query("INSERT INTO surat_keluar(id_surat,no_surat,tgl_surat,tujuan_surat,pengirim_surat,prihal_surat,tahun,file_surat)VALUES('$id','$nosur','$tgl','$tjuan','$pgrm','$persur','$thn','$file_name ')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Surat Keluar Sukses Di Buat!!");
			document.location="all_sukel.php?id=viewall";
			</script><?
}
?>
