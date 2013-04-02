<?php

include 'config.php';
include 'cek-login.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>SISTEM INFORMASI MANAJEMEN SURAT</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.setup.js"></script>




</head>
<body>

<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">SISTEM INFORMASI MANAJEMEN SURAT</a></h1>
      <p>Kementerian Agama Purwokerto</p>
    </div>
    <div id="topnav">
      <ul>
        <li><? 
                if (isset($_SESSION['nip'])) $status = "<a href=show.php>Home</a>"; 
                else $status = "<a href=index.php>Home</a>"; 
                echo $status;  
                ?></li>
		
		<li><? 
                if (isset($_SESSION['nip'])) $status = "<a href=surat_masuk.php>Surat Masuk</a>"; //sembunyi disini
                else $status = "a"; 
                echo $status;  
                ?></li>		
				
		<li><? 
                if (isset($_SESSION['nip'])) $status = "<a href=surat_keluar.php>Surat Keluar</a>"; //sembunyi disini
                else $status = "a"; 
                echo $status;  
                ?></li>				
      
        <li> <a href="acc.php"> <?echo $_SESSION['nama']?></a>
                
               
       
    
		<li><? 
                if (isset($_SESSION['nip'])) $status = "<a href=logout.php>logout</a>"; 
                else $status = "<a href=index.php>login</a>"; 
                echo $status;  
                ?></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
