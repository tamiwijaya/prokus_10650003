

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
$cat=$_POST['category'];
$tit=$_POST['title'];
$tgl=$_POST['tgl'];
$cont=$_POST['contents'];
?>


<?php

$qry=mysql_query("UPDATE articles SET category='$cat',title='$tit',contents='$cont' WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("Artikel Sukses Di Update!!");
			document.location="articles.php?cat=Berita";
			</script><?
}

?>

<a href=admin_panel.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>