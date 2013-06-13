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

/*
menampilkan List dari table Category dan membatasinya menggunakan fungsi limit apabila 6 maka yg tampil 6 list saja
*/
$qry=mysql_query("SELECT * FROM category LIMIT 0, 6", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}



?>
</div>

<div id="l_space">
<h2>News::</h2>
<?php


if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT * FROM articles WHERE id=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";
echo "<p>".$row['contents']."</p>";
}
}

/*
based on the category name received from index.php file the last added article is displayed
*/
if(isset($_GET['cat']))
{
//echo $_GET['cat'];
$cat=$_GET['cat'];
$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC LIMIT 0, 5", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}

                /* mengambil data dari field "title" */
while($row=mysql_fetch_array($qry))
{
echo "<h2>".$row['title']."</h2>";
echo "<a href=edit_article.php?id=".$row['id'].">Edit</a><>";
echo "<a href=deleting_article.php?id=".$row['id']." onClick=\"return confirm('Apakah Anda yakin menghapus file ini  ?')\">Hapus</a>";
echo "<p>".$row['contents']."</p>";
}
}

?>

</div>

 

  <div id="r_space">
<h2>News</h2>
<?php

if(isset($_GET['id']))
{
$id=$_GET['id'];
$qry=mysql_query("SELECT category FROM articles WHERE id='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
$cat=$row['category'];

/*
kode di bawah ini untuk menampilkan semua tittle artikel yang di ambil dr id nya dan menaruhnya di article.php
*/                           
$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
while($row=mysql_fetch_array($qry))
{
//echo $row['title'];
echo "<li><a href=articles.php?id=".$row['id'].">".$row['title']."</a></li>";
}
}

          
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];


$qry=mysql_query("SELECT * FROM articles WHERE category='$cat' order by articles.id DESC", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
while($row=mysql_fetch_array($qry))
{
echo "<li><a href=articles.php?id=".$row['id'].">".$row['title']."</a></li>";
}

}
include 'footer.php';
?>
