<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_line.php');
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_regstat.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT Categoria, COUNT(producto.IdCategoria)Cantidad from categoria INNER JOIN producto on producto.IdCategoria=categoria.IdCategoria GROUP BY Categoria";
$params=array(null);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Cantidad'];
    $labels[] = $row['Cantidad'];
}
$spline = new Spline($labels,$datos);
 
// For the new data set we want 40 points to
// get a smooth curve.
list($newx,$newy) = $spline->Get(50);
 
// Create the graph
$g = new Graph(300,200);
$g->SetMargin(30,20,40,30);
$g->title->Set("Natural cubic splines");
$g->subtitle->Set('(Control points shown in red)');
$g->subtitle->SetColor('darkred');
$g->SetMarginColor('lightblue');
 
//$g->img->SetAntiAliasing();
 
// We need a linlin scale since we provide both
// x and y coordinates for the data points.
$g->SetScale('linlin');
 
// We want 1 decimal for the X-label
$g->xaxis->SetLabelFormat('%1.1f');
 
// We use a scatterplot to illustrate the original
// contro points.
$splot = new ScatterPlot($datos,$labels);
 
// 
$splot->mark->SetFillColor('red@0.3');
$splot->mark->SetColor('red@0.5');
 
// And a line plot to stroke the smooth curve we got
// from the original control points
$lplot = new LinePlot($newy,$newx);
$lplot->SetColor('navy');
 
// Add the plots to the graph and stroke
$g->Add($lplot);
$g->Add($splot);
$g->Stroke();
//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");