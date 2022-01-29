<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");
    include_once(__DIR__ . "/ProjectConstants.php");

    class ModularfootwearConstants {
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
            static::$titlePicImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/titlepic.jpg");
            static::$img1 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/1.jpg");
            static::$img2 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/2.jpg");
            static::$img3 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/3.jpg");
            static::$img4 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/4.jpg");
            static::$img5 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/5.jpg");
            static::$img6 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/6.jpg");
            static::$img7 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/7.jpg");
            static::$img8 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/8.png");
            static::$img9 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/9.png");
            static::$img10 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/10.jpg");
            static::$img11 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/11.jpg");
            static::$img12 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/12.png");
            static::$img13 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/13.png");
            static::$img14 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/14.png");
            static::$img15 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/15.png");
            static::$img16 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/16.jpg");
            static::$img17 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/17.jpg");
            static::$img18 = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/18.jpg");
        }
    }

    ModularfootwearConstants::__constructStatic();
?>