<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Cliente");

require_once("../../app/controllers/dashboard/cliente/createcontroller.php");
Page::templateFooter();
?>