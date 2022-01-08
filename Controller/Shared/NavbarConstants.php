<?php 
    include_once(__DIR__ . "/preventDirectCall.php");
    include_once(__DIR__ . "/_GlobalConstants.php");

    class NavbarConstants {
        //IMG
        public $hamburgerImg;
        public $fileImg;
        public $emailImg;
        public $phoneImg;
        public $locationImg;        
        public $gitImg;        
        public $linkedInImg;        
        public $logoImg;        
        public $homeImg;    
        public $loadingImg;    

        //File Path
        public $resumePath;

        //About
        public $aboutUrl;

        //Projects
        public $footwearImg;

        function __construct() {
            $this->hamburgerImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/bars.svg");
            $this->fileImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/file-lines.svg");
            $this->emailImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/envelope.svg");
            $this->phoneImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/phone.svg");
            $this->locationImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/location-arrow.svg");
            $this->gitImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/github.svg");
            $this->linkedInImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/linkedin.svg");
            $this->logoImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/logo.svg");
            $this->homeImg = GlobalConstants::AppendVersion("/wwwroot/images/Shared/house.svg");
            $this->loadingImg = GlobalConstants::AppendVersion("/wwwroot/images/Home/hollysface.svg");

            $this->resumePath = GlobalConstants::AppendVersion("/wwwroot/images/Shared/Michael_Bower_Resume.pdf");
            $this->aboutUrl = "/View/About/index.php";
            $this->footwearImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/titlepic.jpg");
        }
    }

    $navConst = new NavbarConstants();
?>