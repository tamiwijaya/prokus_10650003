

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

          
        
               
     <h2>Entry Surat Masuk</h2>

 <div class="form">
<form action="sukel_created.php" method="post" enctype="multipart/form-data" name="form1" id="form1" class="niceform">
   <fieldset>

                               
                           
                     


  
</select>
</dd>



<dl>
<dt><label for="title">Nomor surat</label></dt>
<dd><input type="text" name="nosur" id="nosur" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Tanggal Surat</label></dt>
<dd><input type="text" name="tgl" id="tgl" value="" size="54"/></dd>
</dl>


<dl>
<dt><label for="title">Tujuan Surat </label></dt>
<dd><input type="text" name="tjuan" id="tjuan" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Pengirim</label></dt>
<dd><input type="text" name="pgrm" id="pgrm" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Perihal Surat</label></dt>
<dd><input type="text" name="persur" id="persur" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">Tahun</label></dt>
<dd><input type="text" name="thn" id="thn" value="" size="54"/></dd>
</dl>

<dl>
<dt><label for="title">File Surat</label></dt>
<dd><input type="text" name="file" id="file" value="" size="54"/></dd>
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
