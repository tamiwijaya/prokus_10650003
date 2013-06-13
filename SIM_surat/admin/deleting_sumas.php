

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
$id=$_GET['id'];
$qry=mysql_query("DELETE FROM surat_masuk WHERE no_surat='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Surat Sukses Di Hapus!!");
			document.location="all_sumas.php?id=viewall";
			</script><?
}

?>
