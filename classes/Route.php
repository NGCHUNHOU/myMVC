<?php
    class Route {
        public static $validRoutes = array();
        public static $validFrag = array();

        public static function set($route, $function) {
            self::$validRoutes[] = $route;
            if ($_GET['url'] == $route) {
                $function->__invoke();
                exit();
            }
        }
        public static function subset($frag, $function) {
            $url = explode('/',$_GET['url']);
            if ($url[1] == $frag) {
                $function->__invoke();
            }
        }
    }
?>