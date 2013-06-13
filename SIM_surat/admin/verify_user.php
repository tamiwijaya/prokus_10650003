

<?php
include 'config.php';
?>

<?php
$uname=$_POST['u_name'];
$pass=$_POST['pass'];

$qry=mysql_query("SELECT * FROM admin WHERE username='$uname'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
$row=mysql_fetch_array($qry);
//echo $row["user"]." ".$row["password"]."<br/>";

if($_POST['u_name']==$row["username"]&& ($_POST['pass'])==$row["password"]) //md5 di md5($_POST['pass']) saya hapus sementara
{
session_start();
$_SESSION['name']=$_POST['u_name'];
$uname=$_POST['u_name'];
header("Location:index.php");
}
else
{
header("Location:login.php?id=username or password you entered is incorrect");
}
}

?>