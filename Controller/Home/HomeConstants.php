<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class HomeConstants {
        //CSS
        public $bootstrapCss;
        public $homeCss;
        public $navbarCss;

        //JS
        public $coverAnimationJs;
        public $starBackgroundJs;
        public $islandJs;
        public $attractableBtnJs;
        public $navBarJs;
        public $indexJs;

        //IMG
        public $handImg;
        public $loadingImg;

        //View
        public $navBarPhp;
        
        function __construct() {
            $this->bootstrapCss = GlobalConstants::AppendVersion("/wwwroot/css/src/bootstrap/bootstrap.min.css");
            $this->homeCss = GlobalConstants::AppendVersion("/wwwroot/css/Home/index.css");
            $this->navbarCss = GlobalConstants::AppendVersion("/wwwroot/css/Shared/navbar.css");

            $this->coverAnimationJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/CoverAnimation.js");
            $this->starBackgroundJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/StarBackground.js");
            $this->islandJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/coverAnimation/island/Island.js");
            $this->attractableBtnJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/AttractableBtn.js");
            $this->navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
            $this->indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Home/index.js");

            $this->handImg = GlobalConstants::AppendVersion("/wwwroot/images/Home/hand-pointer.svg");
            $this->loadingImg = GlobalConstants::AppendVersion("/wwwroot/images/Home/hollysface.svg");

            $this->navBarPhp = GlobalConstants::$rootPath . "/View/Shared/_navbar.php";
        }
    }

    $homeConst = new HomeConstants();
?>