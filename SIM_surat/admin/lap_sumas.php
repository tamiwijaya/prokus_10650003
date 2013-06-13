<?php
require('fpdf/fpdf.php');
require('config.php');
class PDF extends FPDF
{
function LoadDataFromSQL($sql)
{
	$hasil=mysql_query($sql) or die(mysql_error());

	$data = array();
	while($rows=mysql_fetch_array($hasil)){
		$data[] = $rows;
}
	return $data;
}
// Colored table
function FancyTable($header, $data)
{
	// Colors, line width and bold font
	$this->SetFillColor(255,165,74);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	 /*  $w adalah variabel lebar dari kolom data*/ 
	$w = array( 7,30,28,29,33,28,39);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// tentukan warna background and fontnya  
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Data
	$fill = false;
	foreach($data as $row)
	{
	
		$this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'C',$fill);
		$this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
		$this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
		$this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
		$this->Cell($w[5],6,$row[5],'LR',0,'C',$fill);
		$this->Cell($w[6],6,$row[6],'LR',0,'C',$fill);
		$this->Ln();
		$fill = !$fill;
	
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','T');
 }
}

$pdf = new PDF();
// header tabel 
$header = array('No','Nomor Surat','Tanggal Surat','Tanggal Terima','Pengirim','Perihal Surat','Disposisi');
// buat query SQLmu disini 
$query="select * from surat_masuk";
$data = $pdf->LoadDataFromSQL($query);
//tentukan ukuran dan jenis form 
$pdf->SetFont('Arial','',11);
$pdf->AddPage();
$pdf ->text(15,5,'LAPORAN SURAT MASUK KANTOR KEMENTERIAN AGAMA BANYUMAS PURWOKERTO');
$pdf->FancyTable($header,$data);
$pdf->Output();
?>