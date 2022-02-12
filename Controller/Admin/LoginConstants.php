<?php 
    include_once(__DIR__ . "/../Shared/preventDirectCall.php");
    include_once(__DIR__ . "/../Shared/_GlobalConstants.php");

    class LoginConstants {
        //CSS
        public static $loginCss;
        
        public static function __constructStatic() {
            static::$loginCss = GlobalConstants::AppendVersion("/wwwroot/css/Admin/login.css");
        }
    }

    LoginConstants::__constructStatic();
?>