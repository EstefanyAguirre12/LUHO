<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Registrar primer usuario");
require_once("../../app/controllers/public/menu/menucontroller.php");
require_once("../../app/controllers/public/account/registrocontroller.php");
Page::templateFooter();
?>