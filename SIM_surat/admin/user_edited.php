

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


$no=$_POST['nomor'];
$nip=$_POST['nip'];
$nam=$_POST['nama'];
$jabatan=$_POST['jabatan'];
$al=$_POST['alamat'];
$tlp=$_POST['telepon'];
$pass=$_POST['password'];

?>




<?php

$qry=mysql_query("UPDATE user SET nomor='$no',nip='$nip',nama='$nam',jabatan='$jabatan',alamat='$al',telepon='$tlp',password='$pass' WHERE nomor='$no'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
?><script language="javascript">
			alert("user Sukses Di Update!!");
			document.location="all_user.php?id=viewall";
			</script><?
}

?>

<a href=all_user.php?id=viewall>Go back </a>
</div>
</div>
</body>
</html>