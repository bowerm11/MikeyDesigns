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
        public $homeUrl;

        //Projects
        public $footwearImg;

        //Etc
        public $phoneNum;
        public $email;
        public $locationGeo;
        public $locationDisplayName;

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
            $this->homeUrl = "/View/Home/index.php";
            $this->footwearImg = GlobalConstants::AppendVersion("/wwwroot/images/Projects/Footwear/titlepic.jpg");

            $this->phoneNum = "1-912-312-6253";
            $this->email = "bower.michael316@gmail.com";
            $this->locationGeo = "https://www.google.com/maps/place/Jacksonville,+FL/@30.3452116,-81.8231902,65957m/data=!3m2!1e3!4b1!4m5!3m4!1s0x88e5b716f1ceafeb:0xc4cd7d3896fcc7e2!8m2!3d30.3321838!4d-81.655651";
            $this->locationDisplayName = "Jacksonville, FL";
        }
    }

    $navConst = new NavbarConstants();
?>