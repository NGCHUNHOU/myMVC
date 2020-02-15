<?php
    class Controller extends Database {
        public static function CreateView($view) {
            require_once("./views/$view.php");
        }
    }
?>