<?php
require('../fpdf/fpdf.php');
include('../db.php');

$query = "SELECT 
prov.id_proveedor,
prov.nombre_prov,
prov.telefono_prov,
prov.direccion_prov
FROM
proveedores AS prov;";
$result=$conn->query($query);

//Instancia Fpdf
$pdf = new FPDF();
$pdf->AddPage('');
$pdf->SetFont('Arial', 'B', 16);
//Termina Instancia

// Título
$pdf->Cell(0, 10, 'Proveedores disponibles - Diego A', 1, 1, 'C');
//C centrado, L izquiera, R derecha
$pdf->Ln(5);
//Termina Título

//Encabezado
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(47, 52, 'ID', 1);
$pdf->Cell(47, 52, 'Nombre', 1);
$pdf->Cell(47, 52, 'Telefono', 1);
$pdf->Cell(47, 52, 'Direccion', 1);
$pdf->Ln();
//Termina encabezado

//Body
$pdf->SetFont('Arial', '', 15);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $pdf->Cell(47, 52, $row['id_proveedor'], 1);
        $pdf->Cell(47, 52, $row['nombre_prov'], 1);
        $pdf->Cell(47, 52, $row['telefono_prov'], 1);
        $pdf->Cell(47, 52, $row['direccion_prov'], 1);
        $pdf->Ln();
    } 
}else{
    $pdf->Cell(0, 10, 'No se encuentran registros', 1, 1, 'C');
}

//Termina Body

//Salida de archivo pdf
$pdf->Output('I', 'reporte.pdf');

?>