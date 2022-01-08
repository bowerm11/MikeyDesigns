<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class HomeConstants {
        //CSS
        public static $homeCss;

        //JS
        public static $coverAnimationJs;
        public static $starBackgroundJs;
        public static $islandJs;
        public static $navBarJs;
        public static $indexJs;

        //IMG
        public static $handImg;

        //View
        
        public static function __constructStatic() {
            static::$homeCss = GlobalConstants::AppendVersion("/wwwroot/css/Home/index.css");

            static::$coverAnimationJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/CoverAnimation.js");
            static::$starBackgroundJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/StarBackground.js");
            static::$islandJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/island/Island.js");
            static::$navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
            static::$indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/index.js");

            static::$handImg = GlobalConstants::AppendVersion("/wwwroot/images/Home/hand-pointer.svg");
        }
    }

    HomeConstants::__constructStatic();
?>