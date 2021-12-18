<?php 
    include_once($_SERVER['DOCUMENT_ROOT']."/Controller/Shared/_Constants.php");

    class HomeConstants extends Constants {
        public $indexCssPath;

        function __construct() {
            parent::__construct();
            $this->indexCssPath = "/wwwroot/css/Home/index.css";
        }
    }

    $homeConstants = new HomeConstants();
?>