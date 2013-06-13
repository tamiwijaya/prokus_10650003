<?
if(!isset($_SESSION['id_anggota'])){
    //Then redirect them to the login page
    header( 'Location: index.php' );
	
}
?>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Penjualan tiap hari dalam Bulan '
         },
         xAxis: {
            categories: ['tanggal']
         },
         yAxis: {
            title: {
               text: 'Jumlah '
            }
         },
              series:             
            [
            <?php 
        	include('config.php');
			 $ses=$_SESSION['nip'];
           $sql   = "SELECT tgl_penjualan  FROM faktur_penjualan WHERE id_anggota='$ses'";
            $query = mysql_query( $sql )  or die(mysql_error());
            while( $ret = mysql_fetch_array( $query ) ){
			    $ses=$_SESSION['id_anggota'];
            	$merek=$ret['tgl_penjualan'];                     
                 $sql_jumlah   = "SELECT jml FROM faktur_penjualan WHERE tgl_penjualan='$merek'";        
                 $query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
                 while( $data = mysql_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jml'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $merek; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
	</head>
	<body>
	


	</li>
	</ul>
	</div>
	
		<div id='container'></div>		
	</body>
</html>