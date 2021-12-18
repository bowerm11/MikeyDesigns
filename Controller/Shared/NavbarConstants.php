<?php 
    include_once($_SERVER['DOCUMENT_ROOT']."/Controller/Shared/_Constants.php");

    class NavbarConstants extends Constants {
        public $navbarCss;
        public $menuIconDir;

        function __construct() {
            parent::__construct();
            $this->navbarCss = "/wwwroot/css/Shared/navbar.css";
            $this->menuIconDir = "/wwwroot/images/Shared/bars.svg";
        }
    }

    $navConstants = new NavbarConstants();
?>