<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_scatter.php');

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
    $labels[] = $row['Categoria'];
}

$graph = new Graph(600,600);
$graph->SetScale("textint");
$graph->img->SetMargin(40,40,40,40);        
$graph->SetShadow();
$graph->title->Set("A simple scatter plot");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->Set("Productos");
$graph->xaxis->SetTickLabels($labels);
$graph->yaxis->title->Set("Cantidad");
 
$sp1 = new ScatterPlot($datos);
$sp1->mark->SetType(MARK_FILLEDCIRCLE);
$sp1->mark->SetFillColor("red");
$sp1->mark->SetWidth(8);
 
$graph->Add($sp1);
$graph->Stroke();
//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");