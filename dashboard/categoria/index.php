<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Ocasion");
require_once("../../app/views/dashboard/sections/ocasionview.php");
require_once("../../app/controllers/dashboard/categoria/indexcontroller.php");
Page::templateFooter();
?>