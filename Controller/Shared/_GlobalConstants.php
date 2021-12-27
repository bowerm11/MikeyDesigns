<?php 
    include_once(__DIR__ . "/preventDirectCall.php");

    class GlobalConstants {
        public static $version;
        public static $rootPath;
        public static $ipRemote;
        public static $ipForwarded;

        public static function __constructStatic() {
            static::$version = "1.0.0";
            static::$rootPath = $_SERVER['DOCUMENT_ROOT'];
            static::$ipRemote = GlobalConstants::GetRemoteIP();
            static::$ipForwarded = GlobalConstants::GetForwardedIP();
        }

        public static function AppendVersion($srcPath) {
            return $srcPath . "?" . GlobalConstants::$version;
        }

        private static function GetRemoteIP()
        {
            if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
                return $_SERVER['REMOTE_ADDR'];
            } else {
                return "Unknown";
            }    
        }

        private static function GetForwardedIP()
        {
            if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                return "Unknown";
            }
        }
    }  

    GlobalConstants::__constructStatic();
?>