<?php
// extras.class.php
class PluginExtrasMenu extends CommonGLPI {
    static function getMenuName() {
        return 'Extras';
    }

    static function getTypeName($nb = 0) {
        return 'Extras';
    }

    static function canView() {
        // Check if user has Super-Admin profile (ID 4)
        if (!isset($_SESSION['glpiactiveprofile']['id'])) {
            return false;
        }
        return $_SESSION['glpiactiveprofile']['id'] == 4;
    }

    static function getMenuContent() {
        if (!static::canView()) {
            return [];
        }

        $menu = [];
        $menu['title'] = self::getTypeName();
        $menu['page']  = '/plugins/extras/front/menu1.php';
        return $menu;
    }
}