

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
if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("DELETE FROM articles WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Kategori Sukses Di Hapus!!");
			document.location="articles.php?cat=Berita";
			</script><?
}
}
?>
