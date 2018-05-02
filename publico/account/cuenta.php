<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Informacion Cuenta");
require_once("../../app/controllers/public/menu/menucontroller.php");
require_once("../../app/controllers/public/account/cuentacontroller.php");
Page::templateFooter();
?>