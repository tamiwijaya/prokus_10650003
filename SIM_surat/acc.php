

<?php


include "userheader.php";
include "main.php";
// Let's also make sure the user is logged in at all
// If the PHP $_SESSION[] array is not (!) set
if(!isset($_SESSION['nip'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
}
  
echo "<td><h2> " . $_SESSION['nama'] .  "</h2></td><br />" ;

echo "<table align='center' border='1'>";
echo " <tr>";

echo "<td>NIP </td>";
echo" <td>" . $_SESSION['nip'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo "<td>Jabatan </td>";
echo" <td>" . $_SESSION['jabatan'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo "<td>Alamat</td>";
echo" <td>" . $_SESSION['alamat'] .  "</td><br />" ;
echo " </tr>";
echo " <tr>";
echo " <tr>";
echo "<td>Telepon </td>";
echo" <td>" . $_SESSION['telepon'] .  "</td><br />" ;
echo " </tr>";
echo "</table>";



?>
 