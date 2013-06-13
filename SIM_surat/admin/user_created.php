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


$no=$_POST['id_anggota'];
$nip=$_POST['nip'];
$nam=$_POST['nama'];
$jbtn=$_POST['jabatan'];
$al=$_POST['alamat'];
$ttl=$_POST['telepon'];
$pass=$_POST['pass'];
$img=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$err=$_FILES['image']['error'];

?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO user(nomor,nip,nama,jabatan,alamat,telepon,password,gambar)VALUES('$no','$nip','$nam','$jbtn','$al','$ttl','$pass','$img')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("user Sukses Di Buat!!");
			document.location="all_user.php?id=viewall";
			</script><?
}
?>
