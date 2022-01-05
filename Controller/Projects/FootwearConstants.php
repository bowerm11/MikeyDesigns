<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class FootwearConstants {
        //CSS
        public static $indexCss;

        //JS
        public static $indexJs;

        //IMG
        public static $cadmodImg;
        public static $cadmod2Img;
        public static $insertImg;
        public static $knitpatternImg;
        public static $seamImg;
        public static $sketchImg;
        public static $soleImg;
        public static $solebottomImg;
        public static $titlepicImg;
        public static $upperknitImg;

        //View
        
        public static function __constructStatic() {
            static::$indexCss = GlobalConstants::AppendVersion("/wwwroot/css/Projects/index.css");

            static::$indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Projects/index.js");

            static::$cadmodImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/cadmodels.jpg");
            static::$cadmod2Img = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/cadmodels2.jpg");
            static::$insertImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/insert.jpg");
            static::$knitpatternImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/knitpattern.jpg");
            static::$seamImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/seam.jpg");
            static::$sketchImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/sketch.jpg");
            static::$soleImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/sole.jpg");
            static::$solebottomImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/solebottomfoot.jpg");
            static::$titlepicImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/titlepic.jpg");
            static::$upperknitImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/upperknit.jpg");
        }
    }

    FootwearConstants::__constructStatic();
?>