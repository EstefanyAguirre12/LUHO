<?php
require_once("../../app/views/public/templates/page.class.php");
Page::templateHeader("Nosotros");
require_once("../../app/views/public/sections/headernosotros_view.php");
require_once("../../app/views/public/sections/datos_view.php");
require_once("../../app/views/public/sections/valores_view.php");
require_once("../../app/views/public/sections/team_view.php");
Page::templateFooter();
?>