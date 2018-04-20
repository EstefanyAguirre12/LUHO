<!doctype html>
<html>
    <head>
        <title>Zebra_Pagination, array example</title>
        <meta charset="utf-8">
        <?php if (isset($_GET['bootstrap']) && $_GET['bootstrap'] == 1):?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <?php else:?>
        <link rel="stylesheet" href="zebra_pagination.css" type="text/css">
        <?php endif?>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>

        <h2>Zebra_Pagination, array example</h2>

        <p>Show next/previous page links on the <a href="example1.php?navigation_position=left">left</a> or on the
        <a href="example1.php?navigation_position=right">right</a>. Or revert to the <a href="example1.php">default style</a>.<br>
        Pagination links can be shown in <a href="example1.php">natural</a> or <a href="example1.php?direction=reversed">reversed</a> order.<br>
        See the <a href="example1.php">default</a> looks or with <a href="example1.php?bootstrap=1">Bootstrap</a><br>
        <em>(when using Bootstrap you don't need to include the zebra_pagination.css file anymore)</em></p>

        <?php

        require_once("../models/categoria.class.php");

        $countries = new Categoria;

        // let's paginate data from an array...
        $countries = array(
             $countries->getCategoria()

        );

        // how many records should be displayed on a page?
        $records_per_page = 10;

        // include the pagination class
        require 'Zebra_Pagination.php';

        // instantiate the pagination object
        $pagination = new Zebra_Pagination();

        // set position of the next/previous page links
        $pagination->navigation_position(isset($_GET['navigation_position']) && in_array($_GET['navigation_position'], array('left', 'right')) ? $_GET['navigation_position'] : 'outside');

        if (isset($_GET['direction']) && $_GET['direction'] == 'reversed') $pagination->reverse(true);

        // the number of total records is the number of records in the array
        $pagination->records(count($countries));

        // records per page
        $pagination->records_per_page($records_per_page);

        // here's the magick: we need to display *only* the records for the current page
        $countries = array_slice(
            $countries,                                             //  from the original array we extract
            (($pagination->get_page() - 1) * $records_per_page),    //  starting with these records
            $records_per_page                                       //  this many records
        );

        ?>

        <table class="countries table" border="1">

        	<tr><th>Country</th></tr>

            <?php foreach ($countries as $index => $country):?>

            <tr<?php echo $index % 2 ? ' class="even"' : ''?>>
                <td><?php echo $country?></td>
            </tr>

            <?php endforeach?>

        </table>

        <div class="text-center">
        <?php

        // render the pagination links
        $pagination->render();

        ?>
        </div>

    </body>
</html>
