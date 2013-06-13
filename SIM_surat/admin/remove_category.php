

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
include 'header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="hold">
<div id="top">
<h2 align="center">KSU MDJAKA SYSTEM ADMINISTRATION PANEL</h2>
</div>
<div id="log"></div>
<div id="work_area">
<h2>Hapus Kategori </h2>
<p>_________________________________________________________

__________________________________________</p>
<?php
$qry=mysql_query("SELECT * FROM category", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
?>
<form id="form1" name="form1" method="post" action=proses/"category_removed.php">
Select a Category to be Removed : 
<label for="category"></label>
<select name="category" id="category">
<?php
while($row=mysql_fetch_array($qry))
{
echo "<option value='".$row['category']."'>".$row['category']."</option>";
}
?>

</select>
<input type="submit" name="submit" id="submit" value="Remove" />
</form>
<?php

?>
</div>
</div>
</body>
</html>