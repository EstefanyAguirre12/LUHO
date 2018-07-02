<?php

//Este es nuestro primer grafico perros//

//Requiere la libreria generica
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph.php');

//Requerimos el tipo de grafico que vamos a utilizar
require_once('../../app/librerias/jpgraph-4.2.1/src/jpgraph_pie.php');

//Conexion a la base de datos
require_once('../../app/models/database.class.php');

//Buscamos si encontramos un registro con los datos del usuario
$sql="SELECT * FROM producto";
$params=array(null);
$res=Database::getRows($sql,$params);
foreach($res as $row)
{
    //agregamos los datos al array
    $datos[] = $row['Costo'];
    $labels[] = $row['Nombre'];
}

$graph = new PieGraph(600,600);
$graph->SetShadow();
$graph->title->Set("A simple Pie plot");
 
$p1 = new PiePlot($datos);
$p1->SetTheme("sand");
$p1->SetLegends($labels);
$p1->SetCenter(0.4);
 
$graph->Add($p1);
$graph->Stroke();

//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");