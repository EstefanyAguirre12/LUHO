<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Contraseña");
require_once("../../app/controllers/public/menu/menucontroller.php");
require_once("../../app/controllers/public/account/contracontroller.php");
Page::templateFooter();
?>