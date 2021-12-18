<?php 
    abstract class Constants {
        public $rootPath;
        public $controllerPath;
        public $controllerSharedPath;
        public $cssBasePath;
        public $cssSharedPath;
        public $jsBasePath;
        public $jsSharedPath;
        public $imgBasePath;
        public $imgSharedPath;
        public $viewBasePath;
        public $viewSharedPath;

        function __construct() {
            $this->rootPath = $_SERVER['DOCUMENT_ROOT'];
            $this->controllerPath = $this->rootPath . "/Controller";
            $this->controllerSharedPath = $this->controllerPath . "/Shared";
            $this->cssBasePath = $this->rootPath . "/wwwroot/css";
            $this->cssSharedPath = $this->cssBasePath . "/Shared";
            $this->jsBasePath = $this->rootPath . "/wwwroot/js";
            $this->jsSharedPath = $this->jsBasePath . "/Shared";
            $this->imgBasePath = $this->rootPath . "/wwwroot/images";
            $this->imgSharedPath = $this->imgBasePath . "/Shared";
            $this->viewBasePath = $this->rootPath . "/View";
            $this->viewSharedPath = $this->viewBasePath . "/Shared";
        }
    }  
?>