<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class Projects {
        public static $projects;

        public static function __constructStatic() {
            static::$projects = array(
                new Project("/View/Projects/footweardesign.php", "footwear", "/wwwroot/images/Projects/Footwear/titlepic.jpg", "Footwear Design"),
                new Project("/View/Projects/cacoonhub.php", "cacoonhub", "/wwwroot/images/Projects/Cacoonhub/18.jpg", "Cacoon Hub")
            );
        }
    }

    class Project {
        public $projectPageUrl;
        public $projectCardName;
        public $projectImgUrl;
        public $projectDisplayName;

        public function __construct($pageUrl, $cardName, $projectImgUrl, $projectDisplayName) {
            $this->projectPageUrl = $pageUrl;
            $this->projectCardName = $cardName;
            $this->projectImgUrl = GlobalConstants::AppendVersion($projectImgUrl);
            $this->projectDisplayName = $projectDisplayName;
        }
    }

    Projects::__constructStatic();
?>