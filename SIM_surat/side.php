 </div>
    </div>
    <div class="fl_right">
      
      <ul>
        
        
        <li class="last">
          

<?php
if(!isset($_SESSION['nip'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
}
$ida=$_SESSION['nip'];
$qry=mysql_query("SELECT total_pendapatan from laporan_pendapatan where id_anggota='$ida'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());

}

echo "<h2>".$row['total_pendapatan']."</h2>";
?>

        </li>

      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
