<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");
    include_once(__DIR__ . "/ProjectConstants.php");

    class HandtoolConstants {
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
        public static $img17;
        public static $img18;
        
        public static function __constructStatic() {
            static::$titlePicImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/displayimg.png");
            static::$img1 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/1.png");
            static::$img2 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/2.png");
            static::$img3 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/3.png");
            static::$img4 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/4.png");
            static::$img5 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/5.png");
            static::$img6 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/6.png");
            static::$img7 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/7.png");
            static::$img8 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/8.png");
            static::$img9 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/9.png");
            static::$img10 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/10.png");
            static::$img11 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/11.png");
            static::$img12 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/12.png");
            static::$img13 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/13.png");
            static::$img14 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/14.png");
            static::$img15 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/15.png");
            static::$img16 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/16.png");
            static::$img17 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/17.png");
            static::$img18 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Handtool/18.png");
        }
    }

    HandtoolConstants::__constructStatic();
?>