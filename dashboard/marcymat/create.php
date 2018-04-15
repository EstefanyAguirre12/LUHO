<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Marca");
require_once("../../app/views/dashboard/sections/ocasionview.php");
require_once("../../app/controllers/dashboard/marca/create_controller.php");
Page::templateFooter();
?>