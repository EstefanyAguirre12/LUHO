<?php

/*
  An Example PDF Report Using FPDF
  by Matt Doyle

  From "Create Nice-Looking PDFs with PHP and FPDF"
  http://www.elated.com/articles/create-nice-looking-pdfs-php-fpdf/
*/

require_once('../../web/fpdf/fpdf.php');
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/models/carrito.class.php");
session_start();

// Configuracion de variables
$textColour = array( 0, 0, 0 );
$headerColour = array( 100, 100, 100 );
$tableHeaderTopTextColour = array( 255, 255, 255 );
$tableHeaderTopFillColour = array(142, 142, 142);
$tableHeaderTopProductTextColour = array( 0, 0, 0 );
$tableHeaderTopProductFillColour = array( 143, 173, 204 );
$tableHeaderLeftTextColour = array( 99, 42, 57 );
$tableHeaderLeftFillColour = array( 184, 207, 229 );
$tableBorderColour = array( 50, 50, 50 );
$tableRowFillColour = array(203, 168, 149);
$reportNameYPos = 160;
$columnLabels = array( "Producto", "Modelo", "Costo", "Cantidad", "Subtotal");
setlocale(LC_ALL, '');
date_default_timezone_set('America/El_Salvador');
$time = strftime('%c');
$NombreU = $_SESSION['Usuario'];
$IdC = $_SESSION['IdCliente'];
$total=null;

$sql = "SELECT producto.Nombre, producto.Modelo, producto.Costo, carrito.Cantidad, (producto.Costo*carrito.Cantidad)SubTotal FROM carrito INNER JOIN producto ON carrito.IdProducto=producto.IdProducto WHERE carrito.IdCliente=$IdC and carrito.IdCuenta=(SELECT max(cuenta.IdCuenta)max from cuenta where cuenta.EstadoCompra=1 and cuenta.IdCliente=$IdC)";
$params=array(null);
$res=Database::getRows($sql,$params);

foreach($res as $row)
{
  $total = $row['Cantidad']*$row['Costo'] + $total;
}

// End configuration

/**
**/
class PDF extends FPDF
{
// Cabecera de página
function Header()
{

  $this->Image('../../web/img/logos.png',10,10,-300);
  $textColour = array( 0, 0, 0 );
  $headerColour = array( 100, 100, 100 );
  $reportName = "Comprobante de venta";
  $reportNameYPos = 160;
  $this->SetTextColor( $headerColour[0], $headerColour[1], $headerColour[2] );
  $this->SetFont( 'Arial', '', 17 );
  $this->Cell( 0, 15, $reportName, 0, 0, 'C' );
  $this->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $this->SetFont( 'Arial', '', 20 );
  // Salto de línea
  $this->Ln(20);
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','',10);
    // Número de página
    $this->Cell(60,10,'Hay LUHOS que solo puedes darte una vez en la vida',0,0,'L');
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');

    
}
}

$pdf = new PDF( 'P', 'mm', 'Letter' );
$pdf->SetMargins(10, 10, 10, 10);
$pdf->AliasNbPages();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->AddPage();

// Logo
//$pdf->Image( $logoFile, $logoXPos, $logoYPos, $logoWidth );



$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "Usuario: ");
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Write( 6, $NombreU);
$pdf->Ln( 7 );
$pdf->SetFont( 'Arial', 'B', 12 );
$pdf->Write( 6, "Fecha y Hora: ");
$pdf->SetFont( 'Arial', '', 12 );
$pdf->Write( 6, $time);


/**
  Create the table
**/

$pdf->SetDrawColor( $tableBorderColour[0], $tableBorderColour[1], $tableBorderColour[2] );
$pdf->Ln( 15 );

// Create the table header row
$pdf->SetFont( 'Arial', 'B', 14 );


// Remaining header cells
$pdf->SetTextColor( $tableHeaderTopTextColour[0], $tableHeaderTopTextColour[1], $tableHeaderTopTextColour[2] );
$pdf->SetFillColor( $tableHeaderTopFillColour[0], $tableHeaderTopFillColour[1], $tableHeaderTopFillColour[2] );

for ( $i=0; $i<count($columnLabels); $i++ ) {
  $pdf->Cell( 39, 9, $columnLabels[$i], 1, 0, 'C', true );
}

$pdf->Ln( 9 );

// Create the table data rows

$fill = false;
$row = 0;

foreach ( $res as $dataRow ) {

  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 12 );

  for ( $i=0; $i<count($columnLabels); $i++ ) {
    $pdf->Cell( 39, 9,( $dataRow[$i] ), 1, 0, 'C', $fill );
  }

  $row++;
  $fill = !$fill;
  $pdf->Ln( 9 );
}

$pdf->Cell( 156, 9,( "Total"), 1, 0, 'R', $fill );
$pdf->Cell( 39, 9,( "$$total"), 1, 0, 'R', $fill );



/***
  Serve the PDF
***/


$pdf->Output( "report.pdf", "I" );

?>
