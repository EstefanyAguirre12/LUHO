<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Material");
require_once("../../app/views/dashboard/sections/ocasionview.php");
require_once("../../app/controllers/dashboard/comentarios/deletecontroller.php");
Page::templateFooter();
?>