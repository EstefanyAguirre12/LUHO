<?php
require_once("../../app/views/public/templates/page.class.php");
Page::templateHeader("Prinicpal");
require_once("../../app/controllers/public/menu/menucontroller.php");
require_once("../../app/controllers/public/carrito/deletecontroller.php");
Page::templateFooter();
?>