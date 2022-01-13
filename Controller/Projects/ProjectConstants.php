<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class ProjectConstants {
        //CSS
        public static $indexCss;

        //JS
        public static $indexJs;
        public static $tocJs;
        
        public static function __constructStatic() {
            static::$indexCss = GlobalConstants::AppendVersion("/wwwroot/css/Projects/index.css");
            static::$indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Projects/index.js");
            static::$tocJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/TOCScroller.js");
        }
    }

    ProjectConstants::__constructStatic();
?>