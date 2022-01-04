<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class FootwearConstants {
        //CSS
        public $indexCss;

        //JS
        public $indexJs;

        //IMG

        //View
        
        function __construct() {
            $this->indexCss = GlobalConstants::AppendVersion("/wwwroot/css/Projects/index.css");

            $this->indexJs = GlobalConstants::AppendVersion("/wwwroot/js/Projects/Footwear/index.js");
        }
    }

    $footConst = new FootwearConstants();
?>