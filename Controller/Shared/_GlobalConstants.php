<?php 
    include_once(__DIR__ . "/preventDirectCall.php");

    abstract class GlobalConstants {
        public $version;
        public $rootPath;

        function __construct() {
            $this->version = "1.0.0";
            $this->rootPath = $_SERVER['DOCUMENT_ROOT'];
        }

        protected function AppendVersion($srcPath) {
            return $srcPath . "?" . $this->version;
        }
    }  
?>