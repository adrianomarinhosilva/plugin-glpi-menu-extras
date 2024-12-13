<?php
class PluginExtrasMenu extends CommonGLPI {
    static function getMenuName() {
        return 'Extras';
    }

    static function getTypeName($nb = 0) {
        return 'Extras';
    }

    static function canView() {
        return Session::haveRight('config', READ);
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