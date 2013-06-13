<?
require('fpdf/fpdf.php'); 
class PDF extends FPDF 

// membaca data dari database<br />
{
function LoadData(){

$data=array(); 
mysql_connect("localhost","root",""); 
mysql_select_db("suratku");
$query = "SELECT * FROM surat_keluar";
$hasil = mysql_query($query);
$i = 0;
while ($fetchdata = mysql_fetch_row($hasil))
$i++; // membuat counter 1, 2, 3, ... untuk ditampilkan<br />
$data[] = $fetchdata;

return $data;

// function untuk menampilkan tabel<br />
function TabelBiasa($header,$data)
{
// setting lebar masing-masing kolom dalam mm<br />
$w=array(10,45,30,30,40);
// membuat kepala tabel<br />
for($i=0; $i < count header="" i="" p=""){
// memberi warna latar merah pada kepala tabel<br />
$this->SetFillColor(255, 0, 0);
// setting huruf bold pada kepala tabel<br />
$this->SetFont('Arial','B',12);
// parameter L menunjukkan teks rata kiri pada setiap<br />
</count>
<div class="separator" style="clear: both; text-align: center;">
<a href="http://www.blogger.com/blogger.g?blogID=8229738314481492336" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"></a></div>
// sel kepala tabel<br />
<a href="http://www.blogger.com/blogger.g?blogID=8229738314481492336" imageanchor="1" style="clear: left; float: left; margin-bottom: 1em; margin-right: 1em;"></a>            $this->Cell($w[$i],7,$header[$i],1,0,'L',1);<br />
}
$this->Ln();
// menampilkan data<br />
// setting jenis font pada data tabel<br />
$this->SetFont('Arial','',12);
foreach($data as $row)
{
for($i=0;$i<=sizeof($w)-1;$i++)
$this->Cell($w[$i],6,$row[$i],1);
}
// penutup tabel<br />
$this->Cell(array_sum($w),0,'','T');
}
}
}
$pdf=new PDF();
// nama-nama kolom untuk kepala tabel<br />
$header=array('Id Surat','Nomor Surat','Tanggal Surat','Tujuan Surat','Pengirim','Perihal Surat','Tahun');
// memanggil function untuk baca data<br />
$data=$pdf->LoadData();
$pdf->AddPage();
// memanggil function untuk menampilkan tabel<br />
$pdf->TabelBiasa($header,$data);
$pdf->Output();
?>
 