<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class AboutConstants {
        //CSS
        public $aboutCss;

        //JS
        public $navBarJs;
        public $indexJs;

        //IMG
        public $dotImg;
        public $keyImg;
        public $lineImg;
        public $lineUpImg;
        public $starImg;
        public $awardImg;
        public $medalImg;
        public $trophyImg;
        
        //View
        
        function __construct() {
            $this->aboutCss = GlobalConstants::AppendVersion("/wwwroot/css/About/index.css");

            $this->navBarJs = GlobalConstants::AppendVersion("/wwwroot/js/Shared/navbar.js");
            $this->indexJs = GlobalConstants::AppendVersion("/wwwroot/js/About/index.js");

            $this->dotImg = GlobalConstants::AppendVersion("/wwwroot/images/About/circle.svg");
            $this->keyImg = GlobalConstants::AppendVersion("/wwwroot/images/About/gunmetal.svg");
            $this->lineImg = GlobalConstants::AppendVersion("/wwwroot/images/About/line.svg");
            $this->lineUpImg = GlobalConstants::AppendVersion("/wwwroot/images/About/lineUp.svg");
            $this->starImg = GlobalConstants::AppendVersion("/wwwroot/images/About/star.svg");
            $this->awardImg = GlobalConstants::AppendVersion("/wwwroot/images/About/award.svg");
            $this->medalImg = GlobalConstants::AppendVersion("/wwwroot/images/About/medal.svg");
            $this->trophyImg = GlobalConstants::AppendVersion("/wwwroot/images/About/trophy.svg");
        }
    }

    $aboutConst = new AboutConstants();
?>