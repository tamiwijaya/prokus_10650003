

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
include 'config.php';
?>
<?php
$id=$_POST['id'];
$nosur=$_POST['nosur'];
$tgl=$_POST['tgl'];
$tjan=$_POST['tjan'];
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

$qry=mysql_query("UPDATE surat_keluar SET id_surat='$id',no_surat='$nosur',tgl_surat='$tgl',tujuan_surat='$tjan',pengirim_surat='$pgrm',prihal_surat='$persur' ,tahun='$thn',file_surat='$file_name' WHERE id_surat='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Surat Keluar Sukses Di Update!!");
			document.location="all_sukel.php";
			</script><?
}

?>

<a href=admin_panel.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>