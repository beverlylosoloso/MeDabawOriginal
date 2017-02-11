<?php 

if (!empty($_POST['submit'])) {
	

	$hospital_name = $_POST['hospital_name'];
	$hospital_names = array('SPMC', 'Acosta');
	$address = "panacan";
}
require("fpdf/fpdf.php");
$pdf = new 	FPDF();
$pdf->AddPage();

$pdf->SetFont("Helvetica", "B", 16);
$pdf->Cell(0, 10, "Welcome $hospital_name", 1, 1, 'C');
$pdf->Cell(95, 10, "Name", 1, 0, 'C');
$pdf->Cell(95, 10, "Address", 1, 1, 'C');
$pdf->SetFont("Helvetica", "", 10);

foreach ($hospital_names as $hospital_name) {
		$pdf->Cell(95, 10, "$hospital_name", 1, 0, 'C');
		$pdf->Cell(95, 10, "$address", 1, 1, 'C');
}

$pdf->output();


 ?>