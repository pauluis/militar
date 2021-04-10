<?php

require('pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'REPORTE DE CARTELES ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(36,5,'codigo cartel',1);
    $this->Cell(36,5,'codigo soldado',1);
    $this->Cell(36,5,'nombre soldado',1);
    $this->Cell(36,5,'nombre cartel',1);
    $this->Cell(36,5,'ubicacion',1,1,0);

  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-1);
    // Arial italic 8
    $this->SetFont('Arial','I',3);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("conexion.php");
$consulta = "SELECT * FROM carteles";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(36,5,$row['codigocartel'],1);
    $pdf->Cell(36,5,$row['codigosolda'],1,);
    $pdf->Cell(36,5,$row['nombresolda'],1,);
    $pdf->Cell(36,5,$row['nombrecartel'],1,0,'C',0);
    $pdf->Cell(36,5,$row['ubicacion'],1,1,'C',0);
} 


    $pdf->Output();
?>