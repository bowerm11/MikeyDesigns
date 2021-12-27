<?php 
    include_once(__DIR__ . "/preventDirectCall.php");
    include_once(__DIR__ . "/_GlobalConstants.php");

    class NavbarConstants extends GlobalConstants {
        //IMG
        public $hamburgerImg;
        public $fileImg;
        public $emailImg;
        public $phoneImg;
        public $locationImg;        
        public $gitImg;        
        public $linkedInImg;        

        //File Path
        public $resumePath;

        //About
        public $aboutUrl;

        //Projects

        function __construct() {
            parent::__construct();
            $this->hamburgerImg = $this->AppendVersion("/wwwroot/images/Shared/bars.svg");
            $this->fileImg = $this->AppendVersion("/wwwroot/images/Shared/file-lines.svg");
            $this->emailImg = $this->AppendVersion("/wwwroot/images/Shared/envelope.svg");
            $this->phoneImg = $this->AppendVersion("/wwwroot/images/Shared/phone.svg");
            $this->locationImg = $this->AppendVersion("/wwwroot/images/Shared/location-arrow.svg");
            $this->gitImg = $this->AppendVersion("/wwwroot/images/Shared/github.svg");
            $this->linkedInImg = $this->AppendVersion("/wwwroot/images/Shared/linkedin.svg");

            $this->resumePath = $this->AppendVersion("/wwwroot/images/Shared/Michael_Bower_Resume.pdf");
            $this->aboutUrl = "/View/About/index.php";
        }
    }

    $navConst = new NavbarConstants();
?>