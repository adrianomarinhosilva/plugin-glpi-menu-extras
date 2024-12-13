<?php
include ("../../../inc/includes.php");

Session::checkLoginUser();

Html::header('Extras', $_SERVER['PHP_SELF'], "extras", "pluginextrasmenu");
echo "<div class='center'><br><br><h1>Bem-vindo ao Submenu2</h1></div>";
Html::footer();