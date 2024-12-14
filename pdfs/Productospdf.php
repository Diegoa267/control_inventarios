<?php
require('../fpdf/fpdf.php');
include('../db.php');

$query = "SELECT 
inv.id_producto,
inv.producto,
inv.descripcion,
inv.cantidad,
inv.precio_unitario,
inv.fecha_ingreso,
inv.estado,
cat.nombre_cat AS categoria,
prov.nombre_prov AS proveedor
FROM 
inventario AS inv
LEFT JOIN
categorias AS cat ON inv.id_categoria = cat.id_categoria
LEFT JOIN
proveedores AS prov ON inv.id_proveedor = prov.id_proveedor;";
$result=$conn->query($query);

//Instancia Fpdf
$pdf = new FPDF();
$pdf->AddPage('L');
$pdf->SetFont('Arial', 'B', 16);
//Termina Instancia

// Título
$pdf->Cell(0, 10, 'Productos disponibles - Diego A', 1, 1, 'C');
//C centrado, L izquiera, R derecha
$pdf->Ln(5);
//Termina Título

//Encabezado
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'ID', 1);
$pdf->Cell(30, 10, 'Producto', 1);
$pdf->Cell(30, 10, 'Descripcion', 1);
$pdf->Cell(30, 10, 'Cantidad', 1);
$pdf->Cell(33, 10, 'Precio Unitario', 1);
$pdf->Cell(30, 10, 'Categoria', 1);
$pdf->Cell(30, 10, 'Proveedor', 1);
$pdf->Cell(30, 10, 'Fecha', 1);
$pdf->Cell(30, 10, 'Estado', 1);
$pdf->Ln();
//Termina encabezado

//Body
$pdf->SetFont('Arial', '', 8);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $pdf->Cell(30, 10, $row['id_producto'], 1);
        $pdf->Cell(30, 10, $row['producto'], 1);
        $pdf->Cell(30, 10, $row['descripcion'], 1);
        $pdf->Cell(30, 10, $row['cantidad'], 1);
        $pdf->Cell(33, 10, $row['precio_unitario'], 1);
        $pdf->Cell(30, 10, $row['categoria'], 1);
        $pdf->Cell(30, 10, $row['proveedor'], 1);
        $pdf->Cell(30, 10, $row['fecha_ingreso'], 1);
        $pdf->Cell(30, 10, $row['estado'], 1);
        $pdf->Ln();
    } 
}else{
    $pdf->Cell(0, 10, 'No se encuentran registros', 1, 1, 'C');
}

//Termina Body

//Salida de archivo pdf
$pdf->Output('I', 'reporte.pdf');

?>