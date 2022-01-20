<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");
    include_once(__DIR__ . "/ProjectConstants.php");

    class CoraIotConstants {
        public static $titlePicImg;
        public static $img1;
        public static $img2;
        public static $img3;
        public static $img4;
        public static $img5;
        public static $img6;
        public static $img7;
        public static $img8;
        public static $img9;
        public static $img10;
        public static $img11;
        public static $img12;
        public static $img13;
        public static $img14;
        public static $img15;
        public static $img16;
        
        public static function __constructStatic() {
            static::$titlePicImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/displayimg.png");
            static::$img1 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/1.png");
            static::$img2 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/2.png");
            static::$img3 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/3.png");
            static::$img4 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/4.png");
            static::$img5 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/5.png");
            static::$img6 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/6.png");
            static::$img7 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/7.png");
            static::$img8 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/8.png");
            static::$img9 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/9.png");
            static::$img10 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/10.png");
            static::$img11 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/11.png");
            static::$img12 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/12.png");
            static::$img13 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/13.png");
            static::$img14 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/14.png");
            static::$img15 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/15.png");
            static::$img16 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/CoraIot/16.png");
        }
    }

    CoraIotConstants::__constructStatic();
?>