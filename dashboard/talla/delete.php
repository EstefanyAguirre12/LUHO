<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Talla");
require_once("../../app/views/dashboard/sections/ocasionview.php");
require_once("../../app/controllers/dashboard/talla/deletecontroller.php");
Page::templateFooter();
?>