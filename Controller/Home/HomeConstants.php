<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class HomeConstants {
        //CSS
        public static $homeCss;

        //JS
        public static $homeAnimationJs;
        public static $navBarJs;
        public static $threeJs;
        public static $indexJs;

        //IMG
        public static $handImg;

        //View
        
        public static function __constructStatic() {
            static::$homeCss = GlobalConstants::AppendVersion("/wwwroot/css/Home/index.css");

            static::$homeAnimationJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/HomeAnimation.js");
            static::$navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
            static::$threeJs = GlobalConstants::AppendVersion("/wwwroot/js/src/threeJs/three.min.js");
            static::$indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/index.js");

            static::$handImg = GlobalConstants::AppendVersion("/wwwroot/images/Home/hand-pointer.svg");
        }
    }

    HomeConstants::__constructStatic();
?>