<?php

require('pdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',16);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'REPORTE DE SOLDADOS ',0,0,'C');
    // Salto de línea
    $this->Ln(20);

     $this->Cell(60,10,'codigo',1,0,'C',0);
    $this->Cell(60,10,'nombre',1,0,'C',0);
    $this->Cell(30,10,'apellido',1,0,'C',0);
    $this->Cell(30,10,'graduacion',1,1,'C',0);

  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-18);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
}
}

require ("conexion.php");
$consulta = "SELECT * FROM soldados";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);

while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(60,10,$row['codigo'],1,0,'C',0);
    $pdf->Cell(60,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(30,10,$row['apellido'],1,0,'C',0);
    $pdf->Cell(30,10,$row['graduacion'],1,1,'C',0);

} 


    $pdf->Output();


?>