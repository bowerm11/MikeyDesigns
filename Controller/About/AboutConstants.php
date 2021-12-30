<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class AboutConstants {
        //CSS
        public $bootstrapCss;
        public $aboutCss;
        public $navbarCss;

        //JS
        public $jQueryJs;
        public $attractableBtnJs;
        public $navBarJs;
        public $indexJs;
        public $gchartJs;

        //IMG
        public $dotImg;
        public $shuttleImg;
        public $lineImg;
        public $lineUpImg;
        public $rectImg;
        
        //View
        public $navBarPhp;
        
        function __construct() {
            $this->bootstrapCss = GlobalConstants::AppendVersion("/wwwroot/css/src/bootstrap/bootstrap.min.css");
            $this->aboutCss = GlobalConstants::AppendVersion("/wwwroot/css/About/index.css");
            $this->navbarCss = GlobalConstants::AppendVersion("/wwwroot/css/Shared/navbar.css");

            $this->jQueryJs = GlobalConstants::AppendVersion("/wwwroot/js/src/jQuery/jQuery.min.js");
            $this->attractableBtnJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/AttractableBtn.js");
            $this->navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
            $this->indexJs = GlobalConstants::AppendVersion("/wwwroot/js/About/index.js");
            $this->gchartJs = GlobalConstants::AppendVersion("/wwwroot/js/src/googleCharts/gcharts.min.js");

            $this->dotImg = GlobalConstants::AppendVersion("/wwwroot/images/About/circle.svg");
            $this->keyImg = GlobalConstants::AppendVersion("/wwwroot/images/About/key.svg");
            $this->lineImg = GlobalConstants::AppendVersion("/wwwroot/images/About/line.svg");
            $this->lineUpImg = GlobalConstants::AppendVersion("/wwwroot/images/About/lineUp.svg");
            $this->rectImg = GlobalConstants::AppendVersion("/wwwroot/images/About/rect.svg");

            $this->navBarPhp = GlobalConstants::$rootPath . "/View/Shared/_navbar.php";
        }
    }

    $aboutConst = new AboutConstants();
?>