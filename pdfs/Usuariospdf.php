<?php
require('../fpdf/fpdf.php');
include('../db.php');

$query = "SELECT 
us.id,
us.email,
us.contraseña,
us.teléfono
FROM
usuarios AS us;";
$result=$conn->query($query);

//Instancia Fpdf
$pdf = new FPDF();
$pdf->AddPage('');
$pdf->SetFont('Arial', 'B', 16);
//Termina Instancia

// Título
$pdf->Cell(0, 10, 'Usuarios disponibles - Diego A', 1, 1, 'C');
//C centrado, L izquiera, R derecha
$pdf->Ln(5);
//Termina Título

//Encabezado
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(47, 52, 'ID', 1);
$pdf->Cell(47, 52, 'Correo', 1);
$pdf->Cell(47, 52, 'Contrasena', 1);
$pdf->Cell(47, 52, 'Telefono', 1);
$pdf->Ln();
//Termina encabezado

//Body
$pdf->SetFont('Arial', '', 12);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $pdf->Cell(47, 52, $row['id'], 1);
        $pdf->Cell(47, 52, $row['email'], 1);
        $pdf->Cell(47, 52, $row['contraseña'], 1);
        $pdf->Cell(47, 52, $row['teléfono'], 1);
        $pdf->Ln();
    } 
}else{
    $pdf->Cell(0, 10, 'No se encuentran registros', 1, 1, 'C');
}

//Termina Body

//Salida de archivo pdf
$pdf->Output('I', 'reporte.pdf');

?>