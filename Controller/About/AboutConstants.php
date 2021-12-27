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

        //IMG
        
        
        //View
        public $navBarPhp;
        
        function __construct() {
            $this->bootstrapCss = GlobalConstants::AppendVersion("/wwwroot/css/src/bootstrap/bootstrap.min.css");
            $this->aboutCss = GlobalConstants::AppendVersion("/wwwroot/css/About/index.css");
            $this->navbarCss = GlobalConstants::AppendVersion("/wwwroot/css/Shared/navbar.css");

            $this->jQueryJs = GlobalConstants::AppendVersion("/wwwroot/js/src/jQuery/jQuery.min.js");
            $this->attractableBtnJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/AttractableBtn.js");
            $this->navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navBar.js");
            $this->indexJs = GlobalConstants::AppendVersion("/wwwroot/js/About/index.js");

            $this->navBarPhp = GlobalConstants::$rootPath . "/View/Shared/_navbar.php";
        }
    }

    $aboutConst = new AboutConstants();
?>