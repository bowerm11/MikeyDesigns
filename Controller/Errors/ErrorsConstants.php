<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class ErrorsConstants {
        //css
        public static $indexCss;

        //JS
        public static $indexJs;

        public static function __constructStatic() {
            static::$indexCss = GlobalConstants::AppendVersion("/wwwroot/css/Errors/index.css");

            static::$indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Errors/index.js");
        }
    }

    ErrorsConstants::__constructStatic();
?>