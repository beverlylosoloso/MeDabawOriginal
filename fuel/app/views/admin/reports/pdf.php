<?php 


	

	// $hospital_name = $_POST['hospital_name'];
	$hospital_names = array('SPMC', 'Acosta');
	$address = "panacan";

require_once "assets/pdf/fpdf/fpdf.php";
$pdf = new 	FPDF();
$pdf->AddPage();

$pdf->SetFont("Helvetica", "B", 16);
$pdf->Cell(0, 10, "Welcome Medabaw", 1, 1, 'C');
$pdf->Cell(95, 10, "Name of Hospital", 1, 0, 'C');
$pdf->Cell(95, 10, "Address", 1, 1, 'C');
$pdf->SetFont("Helvetica", "", 10);

foreach ($users as $user) {
	$name = $user->hospital_name;
	$adds = $user->address;
		$pdf->Cell(95, 10, "$name", 1, 0, 'C');
		$pdf->Cell(95, 10, "$adds", 1, 1, 'C');
}

$pdf->output();


 ?>