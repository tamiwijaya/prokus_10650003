<?php
include 'config.php';
if(!isset($_SESSION['id_anggota'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
}
$namafolder="gambar/"; //tempat menyimpan file

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	$jenis_gambar=$_FILES['nama_file']['type'];
	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="insert into anggota(image) values ('$gambar') WHERE id_anggota="$_SESSION['id_anggota']"";
			$res=mysql_query($sql) or die (mysql_error());
			echo "Gambar berhasil dikirim ".$gambar;
					   
			echo "<p><img src=\"$gambar\" width=\"200\"/></p>";		   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
	echo "Anda belum memilih gambar";
}
?>