<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class HomeConstants {
        //CSS
        public $homeCss;

        //JS
        public $coverAnimationJs;
        public $starBackgroundJs;
        public $islandJs;
        public $navBarJs;
        public $indexJs;

        //IMG
        public $handImg;

        //View
        
        function __construct() {
            $this->homeCss = GlobalConstants::AppendVersion("/wwwroot/css/Home/index.css");

            $this->coverAnimationJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/CoverAnimation.js");
            $this->starBackgroundJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/StarBackground.js");
            $this->islandJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/island/Island.js");
            $this->navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
            $this->indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/index.js");

            $this->handImg = GlobalConstants::AppendVersion("/wwwroot/images/Home/hand-pointer.svg");
        }
    }

    $homeConst = new HomeConstants();
?>