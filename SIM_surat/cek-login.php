<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['nip']) || empty($_SESSION['nip'])) {
	//redirect ke halaman login
	header('location:index.php');
}
?>