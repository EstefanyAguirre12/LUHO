<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Categoria");

require_once("../../app/controllers/dashboard/categoria/createcontroller.php");
Page::templateFooter();
?>