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

//Creamos el grafico de pastel
$grafico = new PieGraph(350,250);

$theme_class="DefaultTheme";

//Le ponemos un nomnbre al grafico
$grafico->title->Set("Costo de los productos");
$grafico->SetBox(true);


//Ingresamos los datos del array que van a ir en el grafico
$p1 = new PiePlot($datos);


//Colores y esas cosas del grafico
$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));

//al grafico le agregamos los datos
$grafico->Add($p1);

//Salida por pantalla
$grafico->Stroke();

//Salida archivo formato PNG
//$grafico->Stroke("IMG.PNG");