

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
include 'main.php';

?>
<body>

          
        
               
     <h2>Anggota Baru</h2>

 <div class="form">
<form action="user_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

                               
                           
                     


  
</select>
</dd>
<dl>
<dt><label for="title">Nomor</label></dt>
<dd><input type="number" name="id_anggota" id="id_anggota" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">NIP</label></dt>
<dd><input type="text" name="nip" id="nip" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Nama</label></dt>
<dd><input type="text" name="nama" id="nama" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title"> Jabatan </label></dt>
<dd><input type="text" name="jabatan" id="jabatan" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Alamat</label></dt>
<dd><input type="text" name="alamat" id="alamat" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Telepon</label></dt>
<dd><input type="text" name="telepon" id="telepon" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Password</label></dt>
<dd><input type="text" name="pass" id="pass" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Foto</label></dt> 
<dd><input type="file" name="image" id="image" size="54"/></dd>
</dl>

<dt><p align="center"></dt>
<dd><input type="submit" name="Submit" id="Submit" value="Submit" /><dd>
</dl>
</dl>

</form>



</body>

</div>
</div>
</body>
