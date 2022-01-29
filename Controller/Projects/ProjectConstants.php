<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class ProjectConstants {
        //CSS
        public static $indexCss;

        //JS
        public static $indexJs;
        public static $tocJs;

        //Imgs
        public static $arrowDownBlackSvg;
        public static $arrowDownWhiteSvg;
        
        public static function __constructStatic() {
            static::$indexCss = GlobalConstants::AppendVersion("/wwwroot/css/Projects/index.css");
            static::$indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Projects/index.js");
            static::$tocJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/TOCScroller.js");
            static::$arrowDownBlackSvg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Shared/arrow-down-black.svg");
            static::$arrowDownWhiteSvg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Shared/arrow-down-white.svg");
        }
    }

    ProjectConstants::__constructStatic();
?>