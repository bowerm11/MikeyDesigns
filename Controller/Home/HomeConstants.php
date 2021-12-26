<?php 
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class HomeConstants extends GlobalConstants {
        //CSS
        public $bootstrapCss;
        public $homeCss;
        public $navbarCss;

        //JS
        public $jQueryJs;
        public $coverAnimationJs;
        public $starBackgroundJs;
        public $islandJs;
        public $attractableBtnJs;
        public $navBarJs;
        public $indexJs;

        //IMG
        public $handImg;

        //View
        public $navBarPhp;
        
        function __construct() {
            parent::__construct();
            $this->bootstrapCss = $this->AppendVersion("/wwwroot/css/src/bootstrap/bootstrap.min.css");
            $this->homeCss = $this->AppendVersion("/wwwroot/css/Home/index.css");
            $this->navbarCss = $this->AppendVersion("/wwwroot/css/Shared/navbar.css");

            $this->jQueryJs = $this->AppendVersion("/wwwroot/js/src/jQuery/jQuery.min.js");
            $this->coverAnimationJs = $this->AppendVersion("/wwwroot/js/Home/coverAnimation/coverAnimation.js");
            $this->starBackgroundJs = $this->AppendVersion("/wwwroot/js/Home/coverAnimation/StarBackground.js");
            $this->islandJs = $this->AppendVersion("/wwwroot/js/Home/coverAnimation/island/island.js");
            $this->attractableBtnJs = $this->AppendVersion("/wwwroot/js/Shared/AttractableBtn.js");
            $this->navBarJs = $this->AppendVersion("/wwwroot/js/Shared/navBar.js");
            $this->indexJs = $this->AppendVersion("/wwwroot/js/Home/index.js");

            $this->handImg = $this->AppendVersion("/wwwroot/images/Home/hand-pointer.svg");

            $this->navBarPhp = $this-> rootPath . "/View/Shared/_navbar.php";
        }
    }

    $homeConst = new HomeConstants();
?>