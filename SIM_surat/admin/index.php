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
<td><li><a href="create_sumas.php" ><img src="images/kategori.png" />Tambah Surat Masuk</a></li></td>
<td><li><a href=remove_category.php ><img src="images/remove.png"/>Hapus Surat Masuk</a></li></td>
<td><li><a href=report.php ><img src="images/report.png"/>Report</a></li></td>

</tr>
<tr>
<td><li><a href=all_sumas.php?id=viewall><img src="images/post.png" />Lihat Semua Surat Masuk</a></li></td>
<td><li><a href=create_sukel.php ><img src="images/newpost.png" />Tambah Surat Keluar</a></li></td>
<td><li><a href=lap_stok.php ><img src="images/inventory.png"/>Entry laporan Harian</a></li></td>
</tr>

<tr>
<td><li><a href=all_user.php?id=viewall><img src="images/users.png" />Daftar User</a></li></td>
<td><li><a href=create_user.php ><img src="images/adduser.png" />Tambahkan User Baru</a></li></td>
<td><li><a href=create_produk.php ><img src="images/produk.png"/>add Produk</a></li></td>
</tr>


<tr>
<td><li><a href=><img src="images/setor.png" />Laporan penyetoran</a></li></td>
<td><li><a href=lap_pendapatan.php ><img src="images/addp.png" />Buat laporan pendapatan</a></li></td>
<td><li><a href=pendapatan.php ><img src="images/keuangan.png"/>Pendapatan Produk </a></li></td>
</tr>
</table> 
</body>
</html>
