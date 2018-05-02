<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Cerrar sesión");
require_once("../../app/controllers/public/menu/menucontroller.php");
require_once("../../app/controllers/public/account/logoutcontroller.php");
Page::templateFooter();
?>