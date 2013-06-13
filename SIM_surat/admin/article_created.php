

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

$cat=$_POST['category'];
$tit=$_POST['title'];
$tgl=$_POST['tgl'];
$cont=$_POST['contents'];
?>
<?php
include 'config.php';
?>

<?php
$qry=mysql_query("INSERT INTO articles(tanggal_artikel,title,contents,category)VALUES('$tgl','$tit','$cont','$cat')", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Buat!!");
			document.location="articles.php?cat=Berita";
			</script><?
}
?>
