<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Inicio");
require_once("../../app/views/dashboard/inicio/inicio.class.php");
Page::templateFooter();
?>