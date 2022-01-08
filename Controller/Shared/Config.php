<?php 
    include_once(__DIR__ . "/preventDirectCall.php");

    class Config {
        public static $isProduction = false;
        public static $dbhost = "EnterServerLocation";
        public static $dbuser = "EnterUserName";
        public static $dbpass = "EnterPass";
        public static $db = "EnterDBName";
    }
?>