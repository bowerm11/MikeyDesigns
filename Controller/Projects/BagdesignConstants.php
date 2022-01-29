<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");
    include_once(__DIR__ . "/ProjectConstants.php");

    class BagdesignConstants {
        public static $titlePicImg;
        public static $img1;
        public static $img2;
        public static $img3;
        public static $img4;
        public static $img5;
        public static $img6;
        
        public static function __constructStatic() {
            static::$titlePicImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Bagdesign/titlepic.png");
            static::$img1 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Bagdesign/1.png");
            static::$img2 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Bagdesign/2.png");
            static::$img3 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Bagdesign/3.png");
            static::$img4 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Bagdesign/4.png");
            static::$img5 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Bagdesign/5.png");
            static::$img6 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Bagdesign/6.png");
        }
    }

    BagdesignConstants::__constructStatic();
?>