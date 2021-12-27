<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class AboutConstants extends GlobalConstants {
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
            parent::__construct();
            $this->bootstrapCss = $this->AppendVersion("/wwwroot/css/src/bootstrap/bootstrap.min.css");
            $this->aboutCss = $this->AppendVersion("/wwwroot/css/About/index.css");
            $this->navbarCss = $this->AppendVersion("/wwwroot/css/Shared/navbar.css");

            $this->jQueryJs = $this->AppendVersion("/wwwroot/js/src/jQuery/jQuery.min.js");
            $this->attractableBtnJs = $this->AppendVersion("/wwwroot/js/Shared/AttractableBtn.js");
            $this->navBarJs = $this->AppendVersion("/wwwroot/js/Shared/navBar.js");
            $this->indexJs = $this->AppendVersion("/wwwroot/js/About/index.js");

            $this->navBarPhp = $this-> rootPath . "/View/Shared/_navbar.php";
        }
    }

    $aboutConst = new AboutConstants();
?>