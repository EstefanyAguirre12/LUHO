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
require_once("../../app/models/marca.class.php");
session_start();

// Begin configuration
$textColour = array( 0, 0, 0 );
$headerColour = array( 100, 100, 100 );
$tableHeaderTopTextColour = array( 255, 255, 255 );
$tableHeaderTopFillColour = array( 125, 152, 179 );
$tableHeaderTopProductTextColour = array( 0, 0, 0 );
$tableHeaderTopProductFillColour = array( 143, 173, 204 );
$tableHeaderLeftTextColour = array( 99, 42, 57 );
$tableHeaderLeftFillColour = array( 184, 207, 229 );
$tableBorderColour = array( 50, 50, 50 );
$tableRowFillColour = array( 213, 170, 170 );
$reportName = "2009 Widget Sales Report";
$reportNameYPos = 160;
//$logoFile = "widget-company-logo.png";
$logoXPos = 50;
$logoYPos = 108;
$logoWidth = 110;
$columnLabels = array( "Nombre", "Descripcion", "Modelo", "Costo", "Marca");
$chartXPos = 20;
$chartYPos = 250;
$chartWidth = 160;
$chartHeight = 80;
$chartXLabel = "Product";
$chartYLabel = "2009 Sales";
$chartYStep = 20000;
$chartColours = array(
                  array( 255, 100, 100 ),
                  array( 100, 255, 100 ),
                  array( 100, 100, 255 ),
                  array( 255, 255, 100 ),
                );
setlocale(LC_ALL, '');
date_default_timezone_set('America/El_Salvador');
$time = strftime('%c');
$datos = new Marca;
$datos->setId($_GET['id']);
$data = $datos->getProdxMarc();
$NombreU = $_SESSION['Usuario'];

/*$data = array(
          array( 9940, 10100, 9490, 11730 ),
          array( 19310, 21140, 20560, 22590 ),
          array( 25110, 26260, 25210, 28370 ),
          array( 27650, 24550, 30040, 31980 ),
);*/

// End configuration


/**
**/
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
  // Begin configuration
  
  $textColour = array( 0, 0, 0 );
  $headerColour = array( 100, 100, 100 );
  $reportName = "Cantidad de Productos";
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

$pdf = new PDF( 'P', 'mm', 'A4' );
$pdf->AliasNbPages();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
$pdf->AddPage();

// Logo
//$pdf->Image( $logoFile, $logoXPos, $logoYPos, $logoWidth );



$pdf->SetFont( 'Arial', '', 12 );
$pdf->Write( 6, $NombreU);
$pdf->Ln( 7 );
$pdf->Write( 6, $time);
$pdf->Ln( 12 );
$pdf->Write( 6, "Despite the economic downturn, WidgetCo had a strong year. Sales of the HyperWidget in particular exceeded expectations. The fourth quarter was generally the best performing; this was most likely due to our increased ad spend in Q3." );


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
  $pdf->Cell( 36, 9, $columnLabels[$i], 1, 0, 'C', true );
}

$pdf->Ln( 9 );

// Create the table data rows

$fill = false;
$row = 0;

foreach ( $data as $dataRow ) {

  
  // Create the data cells
  $pdf->SetTextColor( $textColour[0], $textColour[1], $textColour[2] );
  $pdf->SetFillColor( $tableRowFillColour[0], $tableRowFillColour[1], $tableRowFillColour[2] );
  $pdf->SetFont( 'Arial', '', 12 );

  for ( $i=0; $i<count($columnLabels); $i++ ) {
    $pdf->Cell( 36, 9,( $dataRow[$i] ), 1, 0, 'C', $fill );
  }

  $row++;
  $fill = !$fill;
  $pdf->Ln( 9 );
}



/***
  Serve the PDF
***/


$pdf->Output( "report.pdf", "I" );

?>
