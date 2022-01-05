<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class AboutConstants {
        //CSS
        public static $aboutCss;

        //JS
        public static $navBarJs;
        public static $indexJs;

        //IMG
        public static $dotImg;
        public static $keyImg;
        public static $lineImg;
        public static $lineUpImg;
        public static $starImg;
        public static $awardImg;
        public static $medalImg;
        public static $trophyImg;
        
        //View
        
        public static function __constructStatic() {
            static::$aboutCss = GlobalConstants::AppendVersion("/wwwroot/css/About/index.css");

            static::$navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
            static::$indexJs = GlobalConstants::AppendVersion("/wwwroot/js/About/index.js");

            static::$dotImg = GlobalConstants::AppendVersion("/wwwroot/images/About/circle.svg");
            static::$keyImg = GlobalConstants::AppendVersion("/wwwroot/images/About/gunmetal.svg");
            static::$lineImg = GlobalConstants::AppendVersion("/wwwroot/images/About/line.svg");
            static::$lineUpImg = GlobalConstants::AppendVersion("/wwwroot/images/About/lineUp.svg");
            static::$starImg = GlobalConstants::AppendVersion("/wwwroot/images/About/star.svg");
            static::$awardImg = GlobalConstants::AppendVersion("/wwwroot/images/About/award.svg");
            static::$medalImg = GlobalConstants::AppendVersion("/wwwroot/images/About/medal.svg");
            static::$trophyImg = GlobalConstants::AppendVersion("/wwwroot/images/About/trophy.svg");
        }
    }

    AboutConstants::__constructStatic();
?>