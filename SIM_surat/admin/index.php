<?


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


include 'config.php';

include'header.php';
include'main.php';



?>
<html><head><title>index</title></head>
<body>


<table border="1"  align="center">
<tr>
<td><li><a href="create_sumas.php" ><img src="images/surat.gif" />Tambah Surat Masuk</a></li></td>
<td><li><a href="all_sumas.php?id=viewall"><img src="images/kotak-surat.jpg" />Lihat Semua Surat Masuk</a></li></td>
<td><li><a href="lap_sumas.php" ><img src="images/report.png"/>Laporan Surat Masuk</a></li></td>

</tr>
<tr>
<td><li><a href="create_sukel.php" ><img src="images/Email_Icon.jpg" />Tambah Surat Keluar</a></li></td>
<td><li><a href="all_sukel.php?id=viewall"><img src="images/email.jpg" />Lihat Semua Surat Keluar</a></li></td>
<td><li><a href="uis.php" ><img src="images/report.png"/>Laporan Surat Keluar</a></li></td>
</tr>

<tr>
<td><li><a href="all_user.php?id=viewall"><img src="images/users.png" />Daftar User</a></li></td>
<td><li><a href="create_user.php" ><img src="images/adduser.png" />Tambahkan User Baru</a></li></td>
<td><li></li></td>

</tr>
<tr>
<td><li><a href="create_new.php" ><img src="images/contextual-backlinks.png"/>Add Article</a></li></td>
<td><li><a href="articles.php?cat=Berita"><img src="images/articles_icon.png" />Daftar Artikel</a></li></td>
<td><li></li></td>
</tr>
</table> 
</body>
</html>
