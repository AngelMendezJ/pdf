<?php
require('fpdf184/fpdf.php');

$pdf = new FPDF();
$pdf -> AddPage();
$pdf -> setXY(5,5);
$pdf -> SetFont('Arial','B',16);
$pdf -> Cell(40,10,'Primer PDF');
$pdf -> Ln();
$pdf -> SetFont('Times','',14);
$pdf -> Cell(40,10,'Angel Mendez');
$pdf -> Output();
?>
