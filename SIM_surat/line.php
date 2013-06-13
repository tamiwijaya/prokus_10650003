<!DOCTYPE HTML>
<?include "userheader.php";?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Grafik line  </title>
		<!--1) include file jquery.min.js dan higchart.js-->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/highcharts.js"></script>

		<script type="text/javascript">
		<?php
 
include "config.php"
 
?>
 

$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'line',
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'Data',
                x: -20 //center
            },
            subtitle: {
                text: '',
                x: -20
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun','Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des']
            },
            yAxis: {
                title: {
                    text: 'jumlah'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +' jumlah';
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -10,
                y: 100,
                borderWidth: 0
            },
            series:             
            [
            <?php //query tiap var lbih dulu, baru tiap var diambil datanya, dijadikan data berjajar berdasar koma
            $sql   = "SELECT * FROM `faktur_penjualan` WHERE produk='1'";
            $query = mysql_query( $sql );
            while( $ret = mysql_fetch_array( $query ) ){
               $nId = $ret['id_produk'];
               $var = $ret['id_produk'];
			   $merek=$ret['tgl_penjualan']; 
                  $sql_   = "SELECT * FROM `faktur_penjualan` WHERE `tgl_penjualan`='$merek'";
                  $query_ = mysql_query( $sql_ );
 
                  $data = "";
                  while( $ret_ = mysql_fetch_array( $query_ ) ){
                     $kel = $ret_['jml'];
                     $data = $data . "," . $kel;
                  }
                  $data = substr( $data , 1 , strlen( $data ) );
                  ?>
                  {
                      name: '<?php echo $var; ?>',
                      data: [<?php echo $data; ?>]
                  },
                  <?php
 
            }
            ?>
            ]
        });
    });
 
});
		</script>
	</head>
 
	<body>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
 
<div id="container" style="width: 700px; height: 200px; margin: 0 auto"></div>
<div id="link">
 <ul>
	   <li>
	|<a href='setvarvarliner.php'>add current data</a>|

	</li>
	</ul>
	</div>

	</body>
</html>

