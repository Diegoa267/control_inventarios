<?php
require('../fpdf/fpdf.php');
include('../db.php');

$query = "SELECT 
cat.id_categoria,
cat.nombre_cat,
cat.descripcion_cat
FROM
categorias AS cat;";
$result=$conn->query($query);

//Instancia Fpdf
$pdf = new FPDF();
$pdf->AddPage('');
$pdf->SetFont('Arial', 'B', 16);
//Termina Instancia

// Título
$pdf->Cell(0, 10, 'Categorias disponibles - Diego A', 1, 1, 'C');
//C centrado, L izquiera, R derecha
$pdf->Ln(5);
//Termina Título

//Encabezado
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(63, 70, 'ID', 1);
$pdf->Cell(63, 70, 'Nombre', 1);
$pdf->Cell(63, 70, 'Descripcion', 1);
$pdf->Ln();
//Termina encabezado

//Body
$pdf->SetFont('Arial', '', 15);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $pdf->Cell(63, 70, $row['id_categoria'], 1);
        $pdf->Cell(63, 70, $row['nombre_cat'], 1);
        $pdf->Cell(63, 70, $row['descripcion_cat'], 1);
        $pdf->Ln();
    } 
}else{
    $pdf->Cell(0, 10, 'No se encuentran registros', 1, 1, 'C');
}

//Termina Body

//Salida de archivo pdf
$pdf->Output('I', 'reporte.pdf');

?>