<?php
class AboutUs extends Controller {
        function Createheader($header) {
            if ( is_dir('./views/common')) {
                require_once('./views/common/'.$header. '.php');
            }
        }
        function Createfooter($footer) {
            if ( is_dir('./views/common')) {
                require_once('./views/common/'.$footer. '.php');
            }
        }
}
?>