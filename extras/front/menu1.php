<?php
include ("../../../inc/includes.php");

Session::checkLoginUser();

// Check if user has Super-Admin profile
if (!isset($_SESSION['glpiactiveprofile']['id']) || $_SESSION['glpiactiveprofile']['id'] != 4) {
    Html::displayRightError();
    exit();
}

Html::header('Extras', $_SERVER['PHP_SELF'], "extras", "pluginextrasmenu");
echo "<div class='center'><br><br><h1>Bem-vindo ao Submenu1</h1></div>";
Html::footer();